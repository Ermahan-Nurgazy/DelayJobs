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

    public function login(Request $req){
    	$user = new User;
    	$success = false;
    	if ($user -> where('email', '=', $req->input('email'))) {
    		if ($user -> where('password', '=', $req->input('password'))) {
    			$success = true;
    			return redirect()->route('home', $success, $user);
    		}
    	}
    	return redirect()->route('home',$success);
    }

     public function detailsProfile($id){
    	$user = new User;
    	return view('profile', ['data'=> $user -> find($id)]);
    }

}
