<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

	public function register(){
		return view('register');
	}

	public function submit(Request $req){
    	$user = new User;
    	$user -> name = $req->input('name');
    	$user -> email = $req->input('email');
    	$user -> password = $req->input('password');

    	$user -> save();

    	return redirect()->route('home');
    }

}
