<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\InternshipController;

// Home route – can later redirect to dashboard or landing page
Route::get('/', function () {
    return view('home'); // Redirect to login or landing page if needed
})->name('home');

// Authentication Routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);

// Core Pages
Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/events', 'events')->name('events');
Route::view('/fyp-projects', 'fyp-projects')->name('fyp-projects');
Route::get('/jobs', [JobController::class, 'fetchJobs'])->name('jobs.index');
Route::get('/internships', [InternshipController::class, 'index'])->name('internships.index');
