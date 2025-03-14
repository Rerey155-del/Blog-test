<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

// Route untuk homepage
Route::get('/', [VideoController::class, 'index']);


// Route untuk form upload video (GET)
Route::get('/upload-video', function () {
    return view('upload');
});

// Route untuk upload video (POST)
Route::post('/upload-video', [VideoController::class, 'store']);

