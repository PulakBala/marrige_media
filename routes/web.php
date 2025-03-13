<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Livewire\LocationDropdown;

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

// my profile route

Route::prefix('profile')->group(function () {
    //Dashboard
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/user-profile', [ProfileController::class, 'user'])->name('profile.user-profile');
    // Add this route
    // Route::get('/personal-info', [ProfileController::class, 'personalInfo'])->name('profile.personal-info');
    // Route::get('/security', [ProfileController::class, 'security'])->name('profile.security');
    // Route::get('/preferences', [ProfileController::class, 'preferences'])->name('profile.preferences');
    // আরও রাউট যোগ করতে পারেন
});



