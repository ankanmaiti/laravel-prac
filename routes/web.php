<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdUserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// jobs
Route::resource('/jobs', JobController::class)
    ->whereNumber('job');


// Auth
Route::get('/register', [ RegisterdUserController::class, 'create' ]);
Route::post('/register', [ RegisterdUserController::class, 'store' ]);

Route::get('/login', [ AuthenticatedSessionController::class, 'create' ]);
Route::post('/login', [ AuthenticatedSessionController::class, 'store' ]);
Route::post('/logout', [ AuthenticatedSessionController::class, 'destroy' ]);
