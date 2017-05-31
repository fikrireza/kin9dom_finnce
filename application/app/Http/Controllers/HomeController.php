<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
    	return view('main.index');
    }

    public function about()
    {
    	return view('main.about');
    }

    public function event()
    {
    	return view('main.event');
    }
    public function eventDetail($slug)
    {
    	return view('main.event.index');
    }
}
