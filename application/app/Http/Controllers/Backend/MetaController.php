<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Meta;
use File;

use App\Http\Controllers\Controller;

class MetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$index = Meta::all();

    	return view('backend.meta.index')->with(compact('index'));
    }

    public function edit($id)
    {
    	$index = Meta::find($id);

    	return view('backend.meta.edit')->with(compact('index'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'meta_image' => 'image',
        ]);

    	$index = Meta::find($id);

    	$index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if (isset($request->remove_meta_image))
        {
            if($index->meta_image != '')
            {
                File::delete($index->meta_image);
                $index->meta_image = '';
            }
        }
        else
        {
            if ($request->hasFile('meta_image')) {
    
                $pathSource = 'amadeo/source/meta/';
                $image      = $request->file('meta_image');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->meta_image != '')
                    {
                        File::delete($index->meta_image);
                    }
                    $index->meta_image = $pathSource . $filename;
                }
            }
        }
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.meta');
    }
}
