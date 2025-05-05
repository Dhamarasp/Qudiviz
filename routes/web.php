<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::get('/lessons', [LessonController::class, 'index'])->name('lessons');

Route::get('/practices', [PracticeController::class, 'index'])->name('practices');

Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

Route::get('/community', [CommunityController::class, 'index'])->name('community');
