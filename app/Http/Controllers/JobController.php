<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //show jobs
    public function index(){

        return view('jobs.index',[
            'jobs'=> Job::all()
        ]);
    }

    public function single(Job $job){
    
        return view('jobs.single',[
            'job'=> $job
        ]);

    }

    public function create(){
        return view('jobs.create');
    }


    public function post(Request $request){

        $fields = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'tags'=>'required',
            'email'=>['required','email'],
            'description'=>'required',
        ]);
        Job::create($fields);

        return redirect('/')->with('message',"Job successfully posted");
    }
}
