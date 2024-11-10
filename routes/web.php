<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TourController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class,"index"])->name('user.dashboard');



Route::get('/tour-detail', [TourController::class, 'index'])->name('tour.detail');

// Route::get('/google-sign-in', [
//     LoginController::class,
//     'getGoogleSignInUrl'
// ])->name('GoogleSign');


// Route::get('/auth/login-google-callback', [
//     LoginController::class,
//     'loginCallback'
// ])->name('Callback');
