<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(4);
    return view('jobs.index', ["jobs" => $jobs]);
});

//create a job
Route::get('/jobs/create', function () {
    dd('M.Shoaib');
//    return view('job.show', ["job.show"=>$job]);
});
Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('jobs.show', ["job"=>$job]);
});

