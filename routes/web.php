<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\Questions\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

//Route::get('/results', [\App\Http\Controllers\QuizController::class, 'index'])->name('results')->middleware('auth');
Route::patch('/quiz/{quiz}', [\App\Http\Controllers\QuizController::class, 'patch'])->name('quiz-update')->middleware('auth');

Route::get('/quiz', [QuestionController::class, 'index'])->name('quiz')->middleware('auth');
Route::post('/quiz', [QuestionController::class, 'store'])->name('quiz-submit')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

