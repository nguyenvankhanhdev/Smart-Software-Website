<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\frontend\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    HomeController::class,
    "index"
]);


Route::get('/login', [LoginController::class, 'login'])->name("auth.login");
Route::get('/tour-detail', [TourController::class, 'index'])->name('tour.detail');
