<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs',
        [
            "jobs" => [
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
            ]
        ]);
});

Route::get('/jobs/{id}', function ($id) {
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

//    Arr::first($jobs, function ($job) use ($id) {
//        return $job['id'] == $id;
//    });

    // OR, using arrow function

    $job = Arr::first($jobs, fn($job)=>$job['id'] == $id);
   return view('job', ["job"=>$job]);
});
