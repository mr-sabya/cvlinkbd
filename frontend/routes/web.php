<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// job
Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('job.index');


// companies
Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');


Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');



Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
