<?php

use App\Http\Controllers\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',function(){
//     return view('HomePage');
// });


Route::get('/', function () {
    return view('HomePage');
})->name('home');
Route::namespace('App\Http\Controllers\Auth')->group(function() {
    // Login routes
    Route::get('login', 'AuthController@index')->name('pages.login');
    Route::post('login', 'AuthController@login')->name('pages.loginn');
    // Route::post('logout', 'AuthController@logout')->name('pages.logout');

    // Register routes
    Route::get('register', 'RegisterController@show')->name('pages.register');
    Route::post('register', 'RegisterController@signUp')->name('pages.register');
});





// Route::get('register', function(){
//     return view('pages.register');
// })->name('register');


Route::get('detail/show', function(){
    return view('pages.Explore.index');
})->name('detail.show');


Route::get('detail', function(){
    return view('pages.Explore.detail');
})->name('detail');

Route::get('edit', function(){
    return view('pages.Explore.edit');
})->name('edit.porto');


Route::get('profile', function(){
    return view('pages.Profile.index');
})->name('profile');

Route::get('profile/detail', function(){
    return view('pages.Profile.show');
})->name('profile.detail');

Route::get('profile/upload', function(){
    return view('pages.Profile.form');
})->name('profile.upload');

Route::get('profile/edit', function() {
    return view('pages.Profile.edit');
})->name('profile.edit');


// Route::get('login', [AuthController::class, 'index']);
// Route::get('register', [RegisterController::class, 'index']);

// Route::get('detail',[DetailController::class, 'show']);
