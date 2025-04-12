<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// return view('welcome');
// });

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsControllers;
use App\Livewire\LocationDropdown;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Fetch the first 9 users' basic information
    $basicInformation = \App\Models\BasicInformation::limit(9)->get();  // Get first 9 users
    return view('home', compact('basicInformation'));
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

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

    // all users profile card route
    Route::get('/all-users', [ProfileController::class, 'allUsers'])->name('all.users');

    // all users profile details data useing id for uniq users
    Route::get('/user/{id?}', [ProfileController::class, 'user'])->name('user.details');

    // check package status for see contact information
    // Route::get('/check-package-status', [ProfileController::class, 'checkPackageStatus']);
    Route::post('/check-package-status', [ProfileController::class, 'checkPackageStatus']);


    // Connection route
    Route::get('/connection', [ConnectionController::class, 'index'])->name('connection');  // Updated line
    Route::get('/connection/add', [ConnectionController::class, 'create'])->name('connection.add');  // New line for add connection

    // package store in database
    Route::post('/connection/store', [ConnectionController::class, 'store'])->name('package.store');  // New line for storing package

    // connection package delete
    Route::delete('/connection/{id}', [ConnectionController::class, 'destroy'])->name('package.delete');  // New line for delete route

    // connection package edit and update
    Route::get('/connection/{id}/edit', [ConnectionController::class, 'edit'])->name('package.edit');  // New line for edit route
    Route::put('/connection/{id}', [ConnectionController::class, 'update'])->name('package.update');  // New line for update route

    // connection purchase
    Route::post('/purchase-package', [ConnectionController::class, 'purchase'])->name('purchase.package');

    // my subscriptions data displaye file
    Route::get('/my-subscriptions', [ConnectionController::class, 'mySubscriptions'])->name('subscriptions.index');

    // upgrade package
    Route::post('/subscriptions/upgrade', [ConnectionController::class, 'upgradePackage'])->name('subscriptions.upgrade');

    //settings
    Route::get('/settings', [SettingsControllers::class, 'index'])->name('settings');
    Route::post('/settings/update-password', [SettingsControllers::class, 'updatePassword'])->name('settings.updatePassword');

    //short list
    Route::post('/shortlist', [UserController::class, 'shortlist'])->name('user.shortlist');

    //ignore list
    Route::post('/ignore', [UserController::class, 'ignore'])->name('user.ignore');

    //short list view
    Route::get('/shortlist',[UserController::class, 'shortlistView'])->name('user.shortlist');

    //ignore list view
    Route::get('/ignorelist', [UserController::class, 'ignorelistView'])->name('user.ignorelist');

    // ... existing code ...
});

// my profile route

Route::prefix('profile')->group(function () {
    // Dashboard
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/user-profile', [ProfileController::class, 'user'])->name('profile.user-profile');
    // Add this route
    Route::get('/contacts/viewed', [ConnectionController::class, 'viewedContacts'])->name('profile.contacts/viewed');


    //short list
    // Route::post('/shortlist', [UserController::class, 'shortlist'])->name('user.shortlist');




    // Route::get('/security', [ProfileController::class, 'security'])->name('profile.security');
    // Route::get('/preferences', [ProfileController::class, 'preferences'])->name('profile.preferences');
    // আরও রাউট যোগ করতে পারেন
});
