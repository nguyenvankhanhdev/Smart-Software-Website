<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HoaDonController;
use App\Http\Controllers\Backend\LoaiBlogController;
use App\Http\Controllers\Backend\LoaiTourController;
use App\Http\Controllers\Backend\LoaiKhacHangController;
use App\Http\Controllers\Backend\TourController;



Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::resource('loaitour', LoaiTourController::class);
Route::resource('loaikh', LoaiKhacHangController::class);
Route::resource('hoadon', HoaDonController::class);
Route::resource('loaiblog',LoaiBlogController::class);
Route::resource('tour', TourController::class);
