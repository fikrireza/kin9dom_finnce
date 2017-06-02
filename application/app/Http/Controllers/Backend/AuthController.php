<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showLogin', 'login', 'formRegister', 'register', 'logout']]);
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.home');
        }
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
            return redirect('/cms/menu');
        } else {
            $query = User::where('username', $request->username);
            $find  = $query->first();
            $check = $query->count();

            if ($check) {
                if ($find->active != 1) {
                    Session::flash('failed', 'Your username not active please inform to team leader');
                    return redirect::back();
                } else {
                    Session::flash('failed', 'Invalid password');
                    return redirect::back();
                }
            } else {
                Session::flash('failed', 'Invalid Username');
                return redirect::back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

    public function password()
    {
        return view('backend.auth.password');
    }

    public function sendPassword()
    {
        return view('backend.auth.password');
    }

    public function resetPassword($token)
    {
        return view('backend.auth.reset');
    }

    public function formRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $messages = '';
        $valid    = 0;
        if ($request->name == '') {
            $messages = $messages . ' fullname and nickname must fill,';
            $valid++;
        }

        if ($request->username == '') {
            $messages = $messages . ' username must fill,';
            $valid++;
        }

        $checkUsername = User::where('username', $request->username)->count();
        if ($checkUsername) {
            $messages = $messages . ' username already exist,';
            $valid++;
        }

        if ($request->email == '') {
            $messages = $messages . ' email must fill,';
            $valid++;
        }

        $checkEmail = User::where('email', $request->email)->count();
        if ($checkEmail) {
            $messages = $messages . ' email already exist,';
            $valid++;
        }

        if ($request->password == '') {
            $messages = $messages . ' password must fill,';
            $valid++;
        }

        if ($request->password != $request->password_confirmation) {
            $messages = $messages . ' password not match,';
            $valid++;
        }

        if ($valid) {
            Session::flash('failed', substr($messages, 0, -1));
            return view('cms.auth.register', [
                'name'     => $request->name,
                'username' => $request->username,
                'email'    => $request->email,
            ]);
        } else {
            $users = new User;

            $users->username = $request->username;
            $users->email    = $request->email;
            $users->password = bcrypt($request->password);
            $users->name     = $request->name;

            $users->save();

            Session::flash('success', 'Data has been added, please info to owner website');
            return redirect()->route('admin');
        }

    }

    public function active($id, Request $request)
    {
        $user = User::find($id);

        if ($request->active == -2) {
            $user->delete();

            Session::flash('success', 'Data has been deleted');
            return redirect::back();
        } else {
            $user->active = $request->active;
            $user->save();

            Session::flash('success', 'Data has been change');
            return redirect::back();
        }
    }
}
