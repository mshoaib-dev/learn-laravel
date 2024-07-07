<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// defining separate method in a class for jobs-listings
class Job {
    public static function all(): array // explicitly defining return type
    {
        return  [
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
    }

    // function for finding the job
    public static function find($id)
    {
        $job = Arr::first(static::all(), fn($job)=>$job['id'] == $id);

        if(!$job)
        {
            abort(404);
        }
        return $job;
    }
}
