<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function(){
    return view('HomePage');
});

Route::get('login', [AuthController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('detail/show',[DetailController::class,'index']);
    Route::get('profile',[ProfileController::class, 'index']);
    Route::get('profile/detail', [ProfileController::class ,'show']);
    Route::get('profile/upload', [ProfileController::class ,'form']);
});
Route::get('detail',[DetailController::class, 'show']);
