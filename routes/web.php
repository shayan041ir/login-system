<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Redis;



Route::get('/', function () {
    return view('welcome');
})->name('home');


// redis con ok
// Route::get('/test-redis', function () {
//     Redis::set('test', 'Hello Redis');
//     return Redis::get('test');
// });


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::post('/check-mobile', [LoginController::class, 'checkMobile'])->name('check-mobile');
Route::post('/login-with-password', [PasswordController::class, 'loginWithPassword'])->name('login-with-password');


Route::get('/otp/{mobile}', [OtpController::class, 'sendOtp'])->name('otp.send')->middleware('throttle:otp');
Route::post('/verify-otp', [OtpController::class, 'verifyOtp'])->name('verify-otp')->middleware('throttle:otp');


Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard')->middleware('auth');
