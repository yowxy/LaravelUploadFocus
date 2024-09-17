<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});



// Route for displaying the login form
Route::get('login', [AuthController::class, 'index'])->name('login');

// Route for processing the login form submission
Route::post('login', [AuthController::class, 'login']);

// Route for displaying the registration form
Route::get('register', [AuthController::class, 'main'])->name('register');

// Route for processing the registration form submission
Route::post('register', [AuthController::class, 'register']);
