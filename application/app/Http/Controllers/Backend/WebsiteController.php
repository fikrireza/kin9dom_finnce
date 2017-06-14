<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Website;
use File;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index = Website::first();

        return view('backend.website.index', ['index' => $index]);
    }

    public function store(Request $request)
    {
        $check = Website::first();

        if (isset($check)) {
            $index = Website::find($check->id);

            $index->website        = $request->website;
            $index->company        = $request->company;
            $index->brief          = $request->brief;
            $index->address        = $request->address;
            $index->phone          = $request->phone;
            $index->email          = $request->email;
            $index->google_map_url = $request->google_map_url;

            $index->save();

        } else {
            $index = new Website;

            $index->website        = $request->website;
            $index->company        = $request->company;
            $index->brief          = $request->brief;
            $index->address        = $request->address;
            $index->phone          = $request->phone;
            $index->email          = $request->email;
            $index->google_map_url = $request->google_map_url;

            $index->save();
        }

        Session::flash('success', 'Data Selected Has Been Updated');
        return redirect::back();
    }
}
