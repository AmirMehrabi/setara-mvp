<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\Auth\StylistAuthController;
use App\Http\Controllers\StylistDashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('about', [PagesController::class, 'about'])->name('about');

Route::get('/stylists/{stylist}', [StylistController::class, 'show'])->name('stylists.show');
Route::post('/stylists/{stylist}/reserve', [StylistController::class, 'reserve'])->name('stylists.reserve')->middleware('auth');


Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth');
Route::post('/profile/update', [PagesController::class, 'updateProfile'])->middleware('auth')->name('profile.update');



Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login', [LoginController::class, 'postLogin']);

Route::get('login/confirm', [LoginController::class, 'confirm'])->name('confirm');

Route::get('/auth/token/{token}', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/auth/token/', [LoginController::class, 'postAuthenticate'])->name('postAuthenticate');


Route::resource('stylists', StylistController::class);



// Stylists Authentication

Route::get('stylist/login', [StylistAuthController::class, 'showLoginForm'])->name('stylist.login');
Route::post('stylist/login', [StylistAuthController::class, 'login']);
Route::post('stylist/logout', [StylistAuthController::class, 'logout'])->name('stylist.logout');

// Route::get('stylist/register', [StylistAuthController::class, 'showRegistrationForm'])->name('stylist.register');
// Route::post('stylist/register', [StylistAuthController::class, 'register']);



// Stylist Dashboard
// Route::group(function () {
    Route::get('/stylist/dashboard', [StylistDashboardController::class, 'index'])->name('stylist.dashboard');
    Route::post('/stylist/dashboard', [StylistDashboardController::class, 'storeAvailableTimeSlots'])->name('stylist.storeAvailableTimeSlots');
