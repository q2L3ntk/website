<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'create'])->middleware('guest')->name('welcome');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('forgot-password');

Route::get('/confirm-password', [LoginController::class, 'confirmPassword'])->name('confirm-password');

Route::get('/verify-email', [LoginController::class, 'verifyEmail'])->name('verify-email');

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth')->name('dashboard');