<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
