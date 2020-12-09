<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workers;

class WorkersController extends Controller
{
    public function workers(){
    	return view('workers',['data'=>Workers::all()]);
    }

    public function addWorker(){
    	return view('addWorker');
    }

    public function submit(Request $req){
    	$worker = new Workers;
    	$worker -> fullName = $req->input('fullName');
    	$worker -> description = $req->input('description');
    	$worker -> salary = $req->input('salary');

    	$worker -> save();

    	return redirect()->route('home');
    }

    public function findWorkersByName(Request $req){
    	$worker = new Workers;
    	return view('workers',['data'=> $worker -> where('fullName', '=', $req->input('findWorker'))->get()]);
    }
}
