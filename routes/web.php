<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TourController;
use Illuminate\Support\Facades\Route;


Route::get('/', [
    HomeController::class,
    "index"
]);


Route::get('/login', [LoginController::class, 'login'])->name("auth.login");
Route::get('/tour-detail', [TourController::class, 'index'])->name('tour.detail');

Route::get('/google-sign-in', [
    LoginController::class ,
     'getGoogleSignInUrl'
 ])->name('GoogleSign');


 Route::get('/auth/login-google-callback', [
    LoginController::class ,
     'loginCallback'
 ])->name('Callback');
