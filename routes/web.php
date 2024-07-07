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
    return view('jobs', ["jobs" => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('job', ["job"=>$job]);
});
