<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Partner;
use File;

use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
	{
		$index = Partner::all();

    	return view('backend.partner.index')->with(compact('index'));
	}

	public function create()
    {
    	return view('backend.partner.create');
    }

	public function store(Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'image'      => 'required|image',
            'priority'   => 'integer',
        ]);

        // return $request->all();


    	$index = new Partner;

        $index->name         = $request->name;
        $index->link         = $request->link;
        if ($request->hasFile('image'))
        {
            $pathSource = 'amadeo/source/partner/';
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

        Session::flash('success', 'Data Has Been Added');
    	return redirect()->route('admin.partner');
    }

	public function edit($id)
    {
    	$index = Partner::find($id);

    	return view('backend.partner.edit')->with(compact('index'));
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'image'      => 'image',
            'priority'   => 'integer',
        ]);

    	$index = Partner::find($id);

    	$index->name         = $request->name;
        $index->link         = $request->link;
        if ($request->hasFile('image'))
        {
            $pathSource = 'amadeo/source/partner/';
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
        
        Session::flash('success', 'Data Selected Has Been Updated');
    	return redirect()->route('admin.partner');
    }

    public function delete($id)
    {
    	Partner::destroy($id);

        Session::flash('success', 'Data Has Been Deleted');
    	return redirect()->route('admin.partner');
    }

    public function action(Request $request)
    {
        if(isset($request->id))
        {
        	if($request->action == 'delete')
        	{
        		Partner::destroy($request->id);
                Session::flash('success', 'Data Selected Has Been Deleted');
        	}
        	else if($request->action == 'enable')
        	{
        		$index = Partner::whereIn('id', $request->id)->update(['flag_publish' => 1]);
                Session::flash('success', 'Data Selected Has Been Enabled');
        	}
        	else if($request->action == 'disable')
        	{
        		$index = Partner::whereIn('id', $request->id)->update(['flag_publish' => 0]);
                Session::flash('success', 'Data Selected Has Been Disabled');
        	}
        }
    	
    	return redirect()->route('admin.partner');
    }

    public function publish($id, $action)
    {
        $index = Partner::find($id);

        $index->flag_publish = $action;

        $index->save();

        if($action == 1)
        {
            Session::flash('success', 'Data Has Been Enabled');
        }
        else
        {
            Session::flash('success', 'Data Has Been Disabled');
        }

        return redirect()->route('admin.partner');
    }
}
