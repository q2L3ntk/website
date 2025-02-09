<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('forgot-password');

Route::get('/confirm-password', [LoginController::class, 'confirmPassword'])->name('confirm-password');