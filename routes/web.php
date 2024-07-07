<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// defining separate method in a class for jobs-listings
class Job {
    public static function all()
    {

    }
}

$jobs = [
    [
        "id" => 1,
        "title"=>"Director General",
        "Salary"=>"$50K",
        "Experience"=> 10
    ],
    [
        "id" => 2,
        "title"=>"Programmer",
        "Salary"=>"$45K",
        "Experience"=> 3
    ],
    [
        "id" => 3,
        "title"=>"HR",
        "Salary"=>"$40K",
        "Experience"=> 5
    ]
];

Route::get('/', function () {
    return view('Home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', ["jobs"=>$jobs]);
});

// you may explicitly define function return type of ARRAY or format the return data in a array format as given
Route::get('/jobs/{id}', function ($id) use ($jobs) {
    $job = Arr::first($jobs, fn($job)=>$job['id'] == $id);
   return view('job', ["job"=>$job]);
});
