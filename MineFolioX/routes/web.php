<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PortofolioUpload;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
})->name('home');



Route::middleware('auth')->group(  function() {
    Route::namespace('App\Http\Controllers')->group(function(){
        Route::resource('portofolio', PortofolioUpload::class)
            ->only(['create','store','edit','update','destroy']);
    });
});


Route::namespace('App\Http\Controllers\Auth')->group(function() {
    // Login routes
    Route::get('login', 'AuthController@index')->name('pages.login');
    Route::post('login', 'AuthController@login')->name('pages.login.post');
    // Route::post('logout', 'AuthController@logout')->name('pages.logout');

    // Route::post('logout', 'AuthController@logout')->name('pages.logout');

    // Register routes
    Route::get('register', 'RegisterController@show')->name('pages.register');
    Route::post('register', 'RegisterController@signUp')->name('pages.registerr');
});


Route::get('profile',[PortofolioUpload::class , 'index'])->name('profile');
// Route::post('profile',[ProfileController::class , 'index'])->name('profile.edit');
Route::get('portofolios/{id}', [PortofolioUpload::class, 'show'])->name('pages.profile.show');
Route::post('logout', [ProfileController::class, 'logout'])->name('logout');

Route::post('/search', [SearchController::class, 'index'])->name('search')->middleware('auth');
Route::get('/search', [SearchController::class, 'index'])->name('search.index');




// Route::middleware('auth')->group(function(){

// });





// Route::get('register', function(){
//     return view('pages.register');
// })->name('register');


Route::get('detail/{id}', [PortofolioUpload::class, 'edit'])->name('pages.portofolio.edit');
// Route::get('detail',[PortofolioUpload::class, 'index'])->name('pages.explore.detail');


Route::get('detail/show', function(){
    return view('pages.Explore.index');
})->name('detail.show');

    Route::get('detail', function() {
        $portofolios = App\Models\Portofolio::simplePaginate(5); // Fetch 5 portfolios per page
        return view('pages.Explore.detail', compact('portofolios'));
    })->name('detail');



Route::get('edit', function(){
    return view('pages.Explore.edit');
})->name('edit.porto');


// Route::get('profile', function(){
//     return view('pages.Profile.index');
// })->name('profile');

// Route::get('profile/detail', function(){
//     return view('pages.profile.show');
// })->name('profile.detail');

Route::get('/category/{id}', [CategoryController::class, 'filterByCategory'])->name('category.filter');

    Route::get('profile/upload', [CategoryController::class, 'index'])->name('profile.upload');


Route::get('profile/edit', function() {
    return view('pages.Profile.edit');
})->name('profile.edit');


// Route::get('login', [AuthController::class, 'index']);
// Route::get('register', [RegisterController::class, 'index']);

// Route::get('detail',[DetailController::class, 'show']);
