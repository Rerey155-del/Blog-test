<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistController;
use App\Http\Controllers\Auth\LoginAdminController;

// Route untuk homepage
Route::get('/', [VideoController::class, 'video']);

// Route untuk form upload video
Route::get('/upload', function () {
    return view('upload');
});

// Route untuk register (pastikan nama file view benar)
Route::get('/register', function () {
    return view('auth.registration');
})->name('register');

Route::get('/package1page', function () {
    return view('layout.package1page');
});

Route::get('/package2page', function () {
    return view('layout.package2page');
});


Route::get('/package3page', function () {
    return view('layout.package3page');
});
Route::get('/package11page', function () {
    return view('layout.package11page');
});

Route::get('/package22page', function () {
    return view('layout.package22page');
});


Route::get('/package33page', function () {
    return view('layout.package33page');
});

// Route untuk login User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Halaman login admin
Route::get('/login/admin', [LoginAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login/admin', [LoginAdminController::class, 'login'])->name('admin.login.submit');

// Middleware untuk halaman admin dengan guard 'admin'
Route::middleware(['auth:admin'])->group(function () {


    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/tables', function () {
        return view('admin.pemesanan');
    })->name('admin.pemesanan');

    Route::get('/admin/users', [UserController::class, 'user'])->name('admin.pengguna');

    Route::post('/logout/admin', [LoginAdminController::class, 'logout'])->name('admin.logout');
});


// Route untuk register
Route::post('/register', [RegistController::class, 'register'])->name('register.post');

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [VideoController::class, 'store'])->name('video.store');
