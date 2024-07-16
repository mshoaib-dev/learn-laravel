<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); // for multiple data set.
        // also order of functions given matters too.
        User::factory()->create([
            'first_name' => 'M. ',
            'last_name' => 'Shoaib',
            'email' => 'mshoaib@dev.com',
        ]);

//        Job::factory(5)->create();
        // OR call the relevant seeder class here.
        // OR trigger the relevant seeder class here, i.e., php artisan db:seed --class = <name of Seeder class>
        $this->call(JobSeeder::class);
    }
}
