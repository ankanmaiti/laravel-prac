<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdUserController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');


// jobs
Route::prefix("/jobs")->controller(JobController::class)->group(function () {

    Route::get('/', 'index');

    Route::post('/', 'store')->middleware(["auth"]);
    Route::get('/create', 'create')->middleware(["auth"]);

    Route::get('/{job}/edit', 'edit')
        ->middleware(["auth"])
        ->can("update", "job");

    Route::patch("/{job}", 'update')
        ->middleware(["auth"])
        ->can("update", "job");

    Route::get('/{job}', 'show');
    Route::delete('/{job}', 'destroy');
});


// Auth
Route::get('/register', [RegisterdUserController::class, 'create']);
Route::post('/register', [RegisterdUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

// dummy routs
Route::get("/test", function () {

    $joblisting = Job::first();
    TranslateJob::dispatch($joblisting)->delay(5);

    return 'done';
});
