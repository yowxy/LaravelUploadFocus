<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello','App\Http\Controllers\HelloController@index');
// Route::get('hello',[HelloController::class, 'index']);
// Route::get('world',[HelloController::class, 'world']);

// Route::resource('posts', PostController::class);

Route::post('posts', [PostController::class, 'store']); // Handles form submission
Route::get('posts', [PostController::class, 'index']); // Lists posts
Route::get('posts/create', [PostController::class, 'create']); // Shows the form to create a new post
Route::get('posts/{id}', [PostController::class, 'show']); // Shows a single post
Route::get('posts/{id}/edit', [PostController::class, 'edit']); // Shows the form to edit a post
Route::patch('posts/{id}', [PostController::class, 'update']); // Handles form submission to update a post
Route::delete('posts/{id}', [PostController::class, 'destroy']);

