<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\frontend\TourController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class,"index"])->name('user.dashboard');

Route::get('/index', [LoginController::class, 'index'])->name('login_view');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'login'])->name("auth.login");
Route::get('/tour-detail', [TourController::class, 'index'])->name('tour.detail');

Route::get('/google-sign-in', [
    LoginController::class,
    'getGoogleSignInUrl'
])->name('GoogleSign');


Route::get('/auth/login-google-callback', [
    LoginController::class,
    'loginCallback'
])->name('Callback');


Route::get('/tour-detail/{slug}', [TourController::class, 'index'])->name('tour.detail');
Route::get('/danh-sach-tour/search', [TourController::class, 'search'])->name('tour.search');

Route::get('/blog/{slug}', [BlogController::class, 'blogDetail'])->name('blog.detail');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.blog-all');
Route::get('/search', [BlogController::class, 'search'])->name('blog.search');

Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('/danh-sach-tour', [TourController::class, 'allTour'])->name('tour.all-tour');
Route::get('/tour-detail', [TourController::class, 'index'])->name('tour.detail');

// Route::get('/google-sign-in', [
//     LoginController::class,
//     'getGoogleSignInUrl'
