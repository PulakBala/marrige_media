<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/', [UserController::class, 'register'])->name('register');

// Logout route added here
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Login route added here
// Route::get('/login', function () {
//     return view('auth.login'); // Login view ta return kora
// })->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
