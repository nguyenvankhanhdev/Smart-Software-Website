<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('auth',[RegisterUserController::class,'index'])->name('auth');
Route::post('register/signup',[RegisterUserController::class,'store'])->name('auth.register');
Route::post('login',[LoginController::class,'login'])->name('auth.login');
Route::get('logout',[LoginController::class,'logout'])->name('auth.logout');
