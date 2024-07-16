<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(4);
    return view('jobs.index', ["jobs" => $jobs]);
});

//create a job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {

    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required'],
        'experience'=>['required', 'integer'],
    ]);
    Job::create([
      "employer_id"=>Employer::find(5)->id,
      "title"=>request('title'),
      "salary"=>request('salary'),
      "experience"=>request('experience'),
    ]);
    return redirect("/jobs");
});
Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('jobs.show', ["job"=>$job]);
});

