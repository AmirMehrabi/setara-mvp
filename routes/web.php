<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StylistController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('about', [PagesController::class, 'about'])->name('about');




Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth');
Route::post('/profile/update', [PagesController::class, 'updateProfile'])->middleware('auth')->name('profile.update');



Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login', [LoginController::class, 'postLogin']);

Route::get('login/confirm', [LoginController::class, 'confirm'])->name('confirm');

Route::get('/auth/token/{token}', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/auth/token/', [LoginController::class, 'postAuthenticate'])->name('postAuthenticate');


Route::resource('stylists', StylistController::class);