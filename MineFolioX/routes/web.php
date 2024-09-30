<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
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
Route::get('detail',[DetailController::class, 'show']);
