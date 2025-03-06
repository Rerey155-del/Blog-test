<?php

use Illuminate\Support\Facades\Route;

// Route untuk homepage
Route::get('/', function () {
    return view('layout.homepage');
});

// Route untuk halaman login (misalnya ada di views/auth/login.blade.php)
Route::get('/login', function () {
    return view('auth.login');
});


