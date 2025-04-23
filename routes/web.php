<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

// Route to redirect to Google's OAuth page
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');

// Route to handle the callback from Google
// For this route, you must set the callback URL in your Google Cloud Console
Route::get('/api/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');

// Protected rout to display a dashboard only for authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');