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
    	return view('frontend.about');
    }

    public function event()
    {
    	return view('frontend.event');
    }
    
    public function eventDetail($slug)
    {
    	return view('frontend.event.index');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function galleryDetail($slug)
    {
        return view('frontend.gallery.index');
    }

    public function article()
    {
        return view('frontend.article');
    }

    public function articleCategory($category)
    {
        return view('frontend.article.category');
    }

    public function articleDetail($category, $slug)
    {
        return view('frontend.gallery.detail');
    }
}
