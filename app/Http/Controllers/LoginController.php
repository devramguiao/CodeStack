<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	if(Auth::check()) {
    		return redirect('tasks');
    	}

    	return view('login');
    }

    public function login(Request $request)
    {
    	request()->validate(
    		[
    			'username' => 'required',
    			'password' => 'required'
    		]
    	);

    	$username = $request->username;
    	$password = $request->password;

    	if(Auth::attempt(["email" => $username, "password" => $password])) {
    		return redirect()->intended('tasks');
    	} else {
    		return redirect('/')
    						->with('failed_login', 'Sorry, your credentials are incorrect!');
    	}
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/');
    }
}
