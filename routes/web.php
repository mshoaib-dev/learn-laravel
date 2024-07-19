<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(4);
    return view('jobs.index', ["jobs" => $jobs]);
});

//create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//store
Route::post('/jobs', function () {
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
});

//show
Route::get('/jobs/{job}', function (Job $job) {
   return view('jobs.show', ["job"=>$job]);
});

//edit
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ["job"=>$job]);
});

//update
Route::patch('/jobs/{job}', function (Job $job) {
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
});
//destroy
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
