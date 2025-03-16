<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

// Route untuk homepage
Route::get('/', [VideoController::class, 'index']);


// Route untuk form upload video (GET)
Route::get('/upload', function () {
    return view('upload');
});

Route::get('/login', function () {
    return view('layout.login');
});

Route::get('/register', function () {
    return view('layout.resgistration');
});




// Route untuk upload video (POST)
Route::post('/upload', [VideoController::class, 'store']);

