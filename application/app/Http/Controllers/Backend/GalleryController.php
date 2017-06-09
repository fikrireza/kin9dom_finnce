<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Gallery;
use File;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
	{
		$index = Gallery::all();

    	return view('backend.gallery.index')->with(compact('index'));
	}

	public function create()
    {
    	return view('backend.gallery.create');
    }

	public function store(Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_gallery,slug',
            'date'       => 'required|date_format:d F Y',
            'priority'   => 'integer',
            'image'      => 'required|image',
            'meta_image' => 'image',
        ]);

        // return $request->all();


    	$index = new Gallery;

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if ($request->hasFile('image'))
        {
            $pathSource = 'amadeo/source/gallery/';
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
        $index->date                = date('Y-m-d', strtotime($request->date));
        $index->priority            = $request->priority;
        
        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if ($request->hasFile('meta_image'))
        {
            $pathSource = 'amadeo/source/gallery/meta/';
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
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.gallery');
    }

	public function edit($id)
    {
    	$index = Gallery::find($id);
    	return view('backend.gallery.edit')->with(compact('index'));
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_gallery,slug,'.$id,
            'date'       => 'required|date_format:d F Y',
            'priority'   => 'integer',
            'image'      => 'image',
            'meta_image' => 'image',
        ]);

    	$index = Gallery::find($id);

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if (isset($request->remove_image))
        {
            if($index->image != '')
            {
                File::delete($index->image);
                $index->image = '';
            }
        }
        else
        {
        	if ($request->hasFile('image'))
	        {
	            $pathSource = 'amadeo/source/gallery/meta/';
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
        }
	        
        $index->date                = date('Y-m-d', strtotime($request->date));
        $index->priority            = $request->priority;

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
        	if ($request->hasFile('meta_image'))
	        {
	            $pathSource = 'amadeo/source/gallery/meta/';
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

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.gallery');
    }

    public function delete($id)
    {
    	Gallery::destroy($id);

    	return redirect()->route('admin.gallery');
    }

    public function action(Request $request)
    {
    	if($request->action == 'delete')
    	{
    		Gallery::destroy($request->id);
    	}
    	else if($request->action == 'enable')
    	{
    		$index = Gallery::whereIn('id', $request->id)->update(['flag_publish' => 1]);
    	}
    	else if($request->action == 'disable')
    	{
    		$index = Gallery::whereIn('id', $request->id)->update(['flag_publish' => 0]);
    	}
    	
    	return redirect()->route('admin.gallery');
    }
}
