<?php

use Illuminate\Support\Facades\Route;
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
    return view('layout.registration');
});

Route::get('/package1', function(){
    return view('layout.package1page');
});

Route::get('/package2', function(){
    return view('layout.package2page');
});

Route::get('/package3', function(){
    return view('layout.package3page');
});



// Route untuk login User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Group untuk admin
Route::middleware(['web'])->group(function () {
    // Route untuk login Admin
    Route::get('/loginAdmin', [LoginAdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/auth/loginAdmin', [LoginAdminController::class, 'login'])->name('admin.auth');

    // Route untuk dashboard (dengan middleware auth agar hanya bisa diakses setelah login)
    Route::middleware(['auth'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard'); // ✅ Pastikan ini sesuai dengan lokasi file
        })->name('admin.dashboard'); // ✅ Gunakan nama ini di redirect
    });
});


// Route untuk upload video
Route::get('/register', function () {
    return view('auth.registration');
})->name('register');

Route::post('/register', [RegistController::class, 'register'])->name('register.post');


