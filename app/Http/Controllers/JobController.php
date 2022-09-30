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
            'logo'=>'required',
            'email'=>['required','email'],
            'description'=>'required',
        ]);

        if($request->hasFile('logo')){
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Job::create($fields);

        return redirect('/')->with('message',"Job successfully posted");
    }

    public function edit(Job $job){
        return view('jobs.edit', [
            'job'=> $job
        ]);
    }


    public function update(Request $request, Job $job){
        
        $fields = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'tags'=>'required',
            'logo'=>'required',
            'email'=>['required','email'],
            'description'=>'required',
        ]);

        if($request->hasFile('logo')){
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($fields);

        return redirect('/')->with('message',"Job Updated successfully");
    }

    public function destroy(Job $job){
        $job->delete();
        return redirect('/')->with('message','Gig Deleted Successfully');

    }

}
