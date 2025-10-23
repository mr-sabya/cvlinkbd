<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// job
Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('job.index');
