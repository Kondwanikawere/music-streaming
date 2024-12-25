<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return inertia('latest');
    })->name('home');
    
    Route::inertia('/latest', 'latest')->name('latest');
    Route::inertia('/description', 'description')->name('description');
    
    Route::get('/trending', function () {
        return inertia('trending');
    })->name('trending');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::inertia('/downloads', 'downloads')->name('downloads');
    Route::inertia('/favorites', 'favorites')->name('favorites');
    Route::inertia('/search', 'search')->name('search');
    Route::inertia('/profile', 'profile')->name('profile');
});

route::middleware('guest')->group(function(){
    Route::get('/login', function () {
        return inertia::render('Auth/signIn');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::inertia('/register', 'Auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});
