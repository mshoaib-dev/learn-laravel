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
//    $jobs = Job::with('employer')->simplePaginate(4);
    $jobs = Job::with('employer')->paginate(4);
//    $jobs = Job::with('employer')->cursorPaginate(4);
    return view('jobs', ["jobs" => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('job', ["job"=>$job]);
});
