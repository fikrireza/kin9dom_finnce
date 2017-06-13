<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Event;
use App\EventImage;
use File;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
	{
		$index = Event::all();

    	return view('backend.event.index')->with(compact('index'));
	}

	public function create()
    {
    	return view('backend.event.create');
    }

	public function store(Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_article,slug',
            'date'       => 'required',
            'time'       => 'required',
            'location'   => 'required',
            'meta_image' => 'image',
        ]);

        // return $request->all();


    	$index = new Event;

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        $index->date                = date('Y-m-d', strtotime($request->date));
        $index->time                = $request->time;
        $index->location            = $request->location;
        
        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if ($request->hasFile('meta_image'))
        {
            $pathSource = 'amadeo/source/event/meta/';
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

        if ($request->hasFile('image'))
        {
        	$files = $request->file('image');
		    foreach ($files as $file)
		    {
		        $pathSource = 'amadeo/source/event/';
	            $filename   = time() . '-' . $file->getClientOriginalName();
	            if($file->move($pathSource, $filename))
	            {
	            	$image = new EventImage;

	            	$image->id_event = $index->id;
	            	$image->title    = $filename;
	                $image->image    = $pathSource . $filename;
	                $image->actor    = Auth::id();

	                $image->save();
	            }
		    }
        }
        Session::flash('success', 'Data Has Been Added');
    	return redirect()->route('admin.event');
    }

	public function edit($id)
    {
    	$index = Event::find($id);
    	$image = EventImage::where('id_event', $id)->orderBy('priority', 'DESC')->get();

    	return view('backend.event.edit')->with(compact('index', 'image'));
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_article,slug,'.$id,
            'date'       => 'required',
            'time'       => 'required',
            'location'   => 'required',
            'meta_image' => 'image',
        ]);

    	$index = Event::find($id);

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        $index->date                = date('Y-m-d', strtotime($request->date));
        $index->time                = $request->time;
        $index->location            = $request->location;

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
                $pathSource = 'amadeo/source/event/meta/';
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

        $countImage = 0;
        if(isset($request->img_id))
        {
            foreach ($request->img_id as $list) {
                $imageUpdate = EventImage::find($request->img_id[$countImage]);
    
                $imageUpdate->title    = $request->img_title[$countImage];
                $imageUpdate->priority = $request->img_priority[$countImage];
    
                $imageUpdate->save();
    
                $countImage++;
            }
        }

        if ($request->hasFile('image'))
        {
        	$files = $request->file('image');
		    foreach($files as $file){
		        $pathSource = 'amadeo/source/event/';
	            $filename   = time() . '-' . $file->getClientOriginalName();
	            if($file->move($pathSource, $filename))
	            {
	            	$image = new EventImage;

	            	$image->id_event = $index->id;
	            	$image->title    = $filename;
	                $image->image    = $pathSource . $filename;
	                $image->actor    = Auth::id();

                    $image->save();
	            }
		    }
        }

        if(isset($request->remove_image))
        {
            EventImage::destroy($request->remove_image);
        }
        Session::flash('success', 'Data Has Been Updated');
    	return redirect()->route('admin.event');
    }

    public function delete($id)
    {
    	Event::destroy($id);
        Session::flash('success', 'Data Has Been Deleted');
    	return redirect()->route('admin.event');
    }

    public function action(Request $request)
    {
        if(isset($request->id))
        {
        	if($request->action == 'delete')
        	{
        		Event::destroy($request->id);
                Session::flash('success', 'Data Selected Has Been Deleted');
        	}
        	else if($request->action == 'enable')
        	{
        		$index = Event::whereIn('id', $request->id)->update(['flag_publish' => 1]);
                Session::flash('success', 'Data Selected Has Been Enabled');
        	}
        	else if($request->action == 'disable')
        	{
        		$index = Event::whereIn('id', $request->id)->update(['flag_publish' => 0]);
                Session::flash('success', 'Data Selected Has Been Disabled');
        	}
        }
    	
    	return redirect()->route('admin.event');
    }

    public function publish($id, $action)
    {
        $index = Event::find($id);

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

        return redirect()->route('admin.event');
    }
}
