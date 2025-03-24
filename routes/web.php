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
})->name('register');

Route::get('/package1', function(){
    return view('layout.package1page');
});

Route::get('/package2', function(){
    return view('layout.package2page');
});
Route::get('/p', function(){
    return view('admin.pemesanan');
});

// Route::get('/package3', function(){
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Route untuk login User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman login admin
Route::get('/login/admin', [LoginAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login/admin', [LoginAdminController::class, 'login'])->name('admin.login.submit');

// Middleware untuk halaman admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // ✅ Gunakan 'dashboard' karena filenya ada di views/
    })->name('admin.dashboard');

    // Logout admin
    Route::post('/logout/admin', [LoginAdminController::class, 'logout'])->name('admin.logout');
});

// Route untuk register
Route::post('/register', [RegistController::class, 'register'])->name('register.post');

Route::get('/upload', function () {
    return view('upload'); // Pastikan file `upload.blade.php` ada di folder `resources/views`
});

Route::post('/upload', [VideoController::class, 'store'])->name('video.store');