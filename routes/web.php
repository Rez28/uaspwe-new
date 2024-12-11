<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// routes/web.php
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

// Route untuk dashboard dengan pengecekan peran
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->role->name === 'admin') {
        return view('admin.dashboard');
    } elseif ($user->role->name === 'official') {
        return view('official.dashboard');
    } elseif ($user->role->name === 'user') {
        return view('user.dashboard');
    }
})->middleware('auth');

// Route untuk halaman registrasi
Route::get('register', function () {
    return view('auth.register');
})->name('register');

// Route untuk proses registrasi
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
