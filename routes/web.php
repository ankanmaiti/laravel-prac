<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// jobs
Route::resource('jobs', JobController::class)
    ->whereNumber('job');

