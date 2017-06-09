<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Contact;
use File;

use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }

    public function index()
    {
    	$index = Contact::all();

    	return view('backend.inbox.index')->with(compact('index'));
    }

    public function view($id)
    {
    	$index = Contact::find($id);

    	return view('backend.inbox.view')->with(compact('index'));
    }

    public function store(Request $request)
    {
    	$index = new Contact;

        $index->name     = $request->name;
        $index->phone    = $request->phone;
        $index->email    = $request->email;
        $index->messages = $request->messages;

        $index->save();

    	return redirect()->route('contact.success');
    }

    public function delete($id)
    {
    	Contact::destroy($id);

    	return redirect()->route('admin.inbox');
    }

    public function action(Request $request)
    {
   		Contact::destroy($request->id);
    	
    	return redirect()->route('admin.inbox');
    }
}
