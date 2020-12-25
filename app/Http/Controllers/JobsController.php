<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function jobs(){
    	return view('jobs',['data'=>Jobs::all()]);
    }

    public function addJob(){
    	return view('addJob');
    }

    public function details($id){
    	$job = new Jobs;
    	return view('detailsJob',['data'=> $job -> find($id)]);
    }

    public function submit(Request $req){
    	$job = new Jobs;
    	$job -> name = $req->input('name');
    	$job -> description = $req->input('description');
    	$job -> salary = $req->input('salary');

    	$job -> save();

    	return redirect()->route('home');
    }

    public function findJobsByName(Request $req){
    	$job = new Jobs;
    	return view('jobs',['data'=> $job -> where('name', 'LIKE', '%'.$req->input('findJob').'%')->get()]);
    }
}
