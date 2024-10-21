<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ToursController;
use App\Http\Controllers\Api\TourTypeController;
use App\Http\Controllers\Api\TourPlaceController;
use App\Http\Controllers\Api\TourDetailController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\BookTourController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getInfo']);

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/login', [UserController::class, 'login'])->name('login');



Route::apiResource('tours', ToursController::class);
Route::get("tours/change-status/{id}", [ToursController::class, 'changeStatus'])->name('tours.change-status');
Route::apiResource('tour-types', TourTypeController::class);
Route::get('getTourByType/{id}', [TourTypeController::class, 'getTourByType'])->name('getTourByType');



Route::apiResource('tour-places', TourPlaceController::class);
Route::apiResource('tour-details', TourDetailController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('book-tours', BookTourController::class);




