<?php

use Illuminate\Support\Facades\Route;


// login route
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// middleware
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
