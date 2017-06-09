<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Social;
use File;

use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
	{
		$index = Social::all();

    	return view('backend.social.index')->with(compact('index'));
	}

	public function create()
    {
    	return view('backend.social.create');
    }

	public function store(Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'image'      => 'required|image',
            'priority'   => 'integer',
        ]);

        // return $request->all();


    	$index = new Social;

        $index->name         = $request->name;
        $index->link         = $request->link;
        if ($request->hasFile('image'))
        {
            $pathSource = 'amadeo/source/social/';
            $image      = $request->file('image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                $index->image = $pathSource . $filename;
            }
        }
        $index->priority     = $request->priority;
        $index->flag_publish = $request->flag_publish;
        $index->actor        = Auth::id();

        $index->save();

    	return redirect()->route('admin.social');
    }

	public function edit($id)
    {
    	$index = Social::find($id);

    	return view('backend.social.edit')->with(compact('index'));
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'image'      => 'image',
            'priority'   => 'integer',
        ]);

    	$index = Social::find($id);

    	$index->name         = $request->name;
        $index->link         = $request->link;
        if ($request->hasFile('image'))
        {
            $pathSource = 'amadeo/source/social/';
            $image      = $request->file('image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
            	if($index->image != '')
                {
                    File::delete($index->image);
                }
                $index->image = $pathSource . $filename;
            }
        }
        $index->priority     = $request->priority;
        $index->flag_publish = $request->flag_publish;
        $index->actor        = Auth::id();

        $index->save();
        
    	return redirect()->route('admin.social');
    }

    public function delete($id)
    {
    	Social::destroy($id);

    	return redirect()->route('admin.social');
    }

    public function action(Request $request)
    {
    	if($request->action == 'delete')
    	{
    		Social::destroy($request->id);
    	}
    	else if($request->action == 'enable')
    	{
    		$index = Social::whereIn('id', $request->id)->update(['flag_publish' => 1]);
    	}
    	else if($request->action == 'disable')
    	{
    		$index = Social::whereIn('id', $request->id)->update(['flag_publish' => 0]);
    	}
    	
    	return redirect()->route('admin.social');
    }
}
