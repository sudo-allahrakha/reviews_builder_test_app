<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewsBuilderController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');;
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/account-security', [AuthController::class, 'security'])->name('security');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change-password');


Route::get('/builder/{view}', [ReviewsBuilderController::class, 'showBuilderView'])->name('reviews-builder');;
Route::get('/api/reviews/', [ReviewsBuilderController::class, 'getReviews'])->name('reviews');;
