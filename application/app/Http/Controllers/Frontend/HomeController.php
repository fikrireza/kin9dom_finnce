<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
    	return view('frontend.index');
    }

    public function about()
    {
    	return view('frontend.about.index');
    }

    public function event()
    {
    	return view('frontend.event.index');
    }
    
    public function eventDetail($slug)
    {
    	return view('frontend.event.detail');
    }

    public function gallery()
    {
        return view('frontend.gallery.index');
    }

    public function galleryDetail($slug)
    {
        return view('frontend.gallery.detail');
    }

    public function article()
    {
        return view('frontend.article.index');
    }

    public function articleCategory($category)
    {
        return view('frontend.article.category');
    }

    public function articleDetail($category, $slug)
    {
        return view('frontend.article.detail');
    }
}
