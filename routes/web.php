<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MovieController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\LogoutMiddleware
;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROUTE INDEX //
 Route::get(
    'actor', function () {
     return view('frontend.layout.actor');
 })->name('movie.actor');

// ROUTE USER CONTROLLER //

Route::controller(UserController::class)->group(function() {
    Route::get('/register', 'register')->name('movie.user.register');
    Route::post('/store', 'store')->name('movie.user.store');
    Route::get('/dashboard/user', 'Index')->name('movie.dashboard.user')->middleware(AuthMiddleware::class);
    Route::get('/dashboard/user/delete/{id}', 'delete')->name('movie.user.delete');
    Route::get('/dashboard/user/edit/{id}', 'edit')->name('movie.user.edit')->middleware(AuthMiddleware::class);
    Route::post('/dashboard/user/update/{id}', 'update')->name('movie.user.update');
});

 // ROUTE AUTHENTICATION CONTROLLER //

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'loginIndex')->name('movie.login')->middleware(LoginMiddleware::class);
    Route::post('/auth', 'login')->name('movie.auth');
    Route::get('/logout', 'logout')->name('movie.logout')->middleware(LogoutMiddleware::class);
});


// ROUTE DASHBOARD CONTROLLER //

Route::controller(DashboardController::class)->group(function() {
    Route::get('/dashboard/index', 'Index')->name('movie.dashboard.index')->middleware(AuthMiddleware::class);
});


 // ROUTE MOVIE CONTROLLER //

Route::controller(MovieController::class)->group(function() {
    Route::get('/index', 'Index')->name('movie.index');
    Route::get('/movie', 'list')->name('movie.movie.list');
    Route::get('/tvShow', 'list')->name('movie.movie.tvShow');
    Route::get('/movie/detail/{id}', 'detail')->name('movie.movie.detail');
    Route::get('/movie/play/{id}', 'play')->name('movie.movie.play');
    Route::get('/dashboard/movie', 'Index_admin')->name('movie.dashboard.movie')->middleware(AuthMiddleware::class);
    Route::get('/dashboard/movie/delete/{id}', 'delete')->name('movie.movie.delete');
    Route::get('/dashboard/movie/edit/{id}', 'edit')->name('movie.movie.edit')->middleware(AuthMiddleware::class);
    Route::post('/dashboard/movie/update/{id}', 'update')->name('movie.movie.update');
    Route::get('/movie/add', 'add')->name('movie.movie.add');
    Route::post('/movie/store', 'store')->name('movie.movie.store');
});