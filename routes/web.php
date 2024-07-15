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
//    $jobs = Job::all(); // it's doing lazy loading.
// applying Eager Loading on Employer Model, this will reduce the query count,
// render the record under one table as one query.even for Hundreds of record,
// we'll have only 2 queries under given scenario., prevents lazyLoaoding by defining method in AppProvider.
    $jobs = Job::with('employer')->get();
    return view('jobs', ["jobs" => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);
   return view('job', ["job"=>$job]);
});
