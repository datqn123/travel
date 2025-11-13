<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PageController;

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

// Auth
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register.submit');
    Route::get('/verify-otp', 'show_verify_otp')->name('register.show-verify-otp');
    Route::post('/verify-otp', 'verifyOtp')->name('register.verify-otp');
    Route::post('/login', 'login')->name('user.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/index', 'index')->name('user.show-login');
    Route::get('/signup', 'signup')->name('user.register');
    Route::get('/', 'home')->name('user.home');
});
