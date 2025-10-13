<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Inertia\Inertia;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/membership', function () {
    return view('membership');
})->name('membership');

Route::get('/trainers', function () {
    return view('trainers');  
})->name('trainers');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Custom Authentication Routes with different names to avoid conflicts
Route::get('/gym-login', [AuthController::class, 'showLoginForm'])->name('gym.login');
Route::post('/gym-login', [AuthController::class, 'login'])->name('gym.login.post');
Route::get('/gym-register', [AuthController::class, 'showRegistrationForm'])->name('gym.register');
Route::post('/gym-register', [AuthController::class, 'register'])->name('gym.register.post');
Route::post('/gym-logout', [AuthController::class, 'logout'])->name('gym.logout');

// Protected Routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/gym-dashboard', [AuthController::class, 'dashboard'])->name('gym.dashboard');
});

// Keep existing Inertia routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Load existing auth and settings routes
require __DIR__.'/auth.php';
require __DIR__.'/settings.php';
