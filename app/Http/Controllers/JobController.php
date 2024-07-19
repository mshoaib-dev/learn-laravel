<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(4);
        return view('jobs.index', ["jobs" => $jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {
        //validate
        request()->validate([
            'title'=>['required', 'min:3'],
            'salary'=>['required'],
            'experience'=>['required', 'integer'],
        ]);
//store in DB
        Job::create([
            "employer_id"=>Employer::find(5)->id,
            "title"=>request('title'),
            "salary"=>request('salary'),
            "experience"=>request('experience'),
        ]);
//redirect
        return redirect("/jobs");

    }
    public function show(Job $job)
    {
        return view('jobs.show', ["job"=>$job]);
    }
    public function edit(Job $job)
    {
        return view('jobs.edit', ["job"=>$job]);
    }
    public function update(Job $job)
    {
        //authorize ... later
        //validate
        request()->validate([
            'title'=>['required', 'min:3'],
            'salary'=>['required'],
            'experience'=>['required', 'integer'],
        ]);
        //update
        $job->update([
            'title'=>request('title'),
            'salary'=>request('salary'),
            'experience'=>request('experience'),
        ]);
        //persist update() will automatically save in the DB
        //redirect
        return redirect('/jobs/'.$job['id']);
    }
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
