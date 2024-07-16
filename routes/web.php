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
Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('jobs.show', ["job"=>$job]);
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ["job"=>$job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required'],
        'experience'=>['required', 'integer'],
    ]);
    //authorize ... later
    //update
    $job = Job::findOrFail($id); // this method covers the null id's as well
//    $job->title = request('title');
//    $job->salary = request('salary');
//    $job->experience = request('experience');
//    $job->save();
    //OR
    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'experience'=>request('experience'),
    ]);
    //persist update() will automatically save in the DB
    //redirect
    return redirect('/jobs/'.$id);
});
//destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});
