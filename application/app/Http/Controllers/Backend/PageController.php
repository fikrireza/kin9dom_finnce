<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\ImageContent;
use App\Content;
use File;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$index = Content::all();

    	return view('backend.page.index')->with(compact('index'));
    }

    public function edit($id)
    {
    	$index = Content::find($id);

    	return view('backend.page.edit')->with(compact('index'));
    }

    public function update($id, Request $request)
    {
    	$index = Content::find($id);

    	$index->title       = $request->title;
        $index->subtitle    = $request->subtitle;
        $index->description = $request->description;
        $index->actor       = Auth::id();

        $index->save();

    	return redirect()->route('admin.page');
    }

    public function indexImage()
    {
    	$index = ImageContent::all();

    	return view('backend.page.indexImage')->with(compact('index'));
    }

    public function editImage($id)
    {
    	$index = ImageContent::find($id);

    	return view('backend.page.editImage')->with(compact('index'));
    }

    public function updateImage($id, Request $request)
    {
        $this->validate($request, [
            'image' => 'image',
        ]);

    	$index = ImageContent::find($id);

    	if (isset($request->remove_image))
        {
            if($index->image != '')
            {
                File::delete($index->meta_image);
                $index->image = '';
            }
        }
        else
        {
            if ($request->hasFile('image')) {
    
                $pathSource = 'amadeo/source/imageContent/';
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

        $index->actor = Auth::id();

        $index->save();

    	return redirect()->route('admin.pageImage');
    }
}
