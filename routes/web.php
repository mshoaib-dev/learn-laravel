<?php
namespace App\Models;

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route-Resource resource(string $name, string $controller, array $options = ['only'=>[], 'except'=>[]])
Route::resource('jobs', JobController::class);




