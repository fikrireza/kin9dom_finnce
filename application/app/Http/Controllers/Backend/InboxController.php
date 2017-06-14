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

        $index->read = 1;
        $index->save();

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

    	Session::flash('success', 'Thank You');
        return redirect::back();
    }

    public function delete($id)
    {
    	Contact::destroy($id);

        Session::flash('success', 'Data Has Been Deleted');
    	return redirect()->route('admin.inbox');
    }

    public function action(Request $request)
    {
        if(isset($request->id))
        {
            if($request->action == 'delete')
            {
                Contact::destroy($request->id);
                Session::flash('success', 'Data Selected Has Been Deleted');
            }
            else if($request->action == 'read')
            {
                $index = Contact::whereIn('id', $request->id)->update(['read' => 1]);
                Session::flash('success', 'Data Selected Has Been Set as Readed');
            }
            else if($request->action == 'unread')
            {
                $index = Contact::whereIn('id', $request->id)->update(['read' => 0]);
                Session::flash('success', 'Data Selected Has Been Set as Unread');
            }
        }

    	return redirect()->route('admin.inbox');
    }
}
