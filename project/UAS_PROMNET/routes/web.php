<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landingpage');
})->name('home');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Routes - Dashboard
Route::middleware('auth')->group(function () {
    // Redirect ke dashboard sesuai role
    Route::get('/dashboard', function () {
        $user = auth()->user();
        if ($user->role === 'mahasiswa') {
            return redirect()->route('mahasiswa.dashboard');
        } else {
            return redirect()->route('umum.dashboard');
        }
    })->name('dashboard');

    // Dashboard Mahasiswa
    Route::get('/mahasiswa/dashboard', function () {
        return view('dashboard.mahasiswa');
    })->name('mahasiswa.dashboard')->middleware('role:mahasiswa');

    // Dashboard Umum
    Route::get('/umum/dashboard', function () {
        return view('dashboard.umum');
    })->name('umum.dashboard')->middleware('role:umum');
});


