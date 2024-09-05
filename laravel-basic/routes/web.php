<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout',[AuthController::class, 'logout']);

Route::post('posts', [PostController::class, 'store']); // Handles form submission
Route::get('posts', [PostController::class, 'index']); // Lists posts
Route::get('posts/create', [PostController::class, 'create']); // Shows the form to create a new post
Route::get('posts/{id}', [PostController::class, 'show']); // Shows a single post
Route::get('posts/{id}/edit', [PostController::class, 'edit']); // Shows the form to edit a post
Route::patch('posts/{id}', [PostController::class, 'update']); // Handles form submission to update a post
Route::delete('posts/{id}', [PostController::class, 'destroy']);
