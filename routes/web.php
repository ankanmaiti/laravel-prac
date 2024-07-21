<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// jobs
Route::get('/jobs', JobController::class);
Route::get('/jobs/{id}', [JobController::class, 'show'])->whereNumber('id');
