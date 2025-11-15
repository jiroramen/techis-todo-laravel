<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 認証ルート
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// パスワードリセット（必要な場合）
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/delete/{taskId}', [App\Http\Controllers\TaskController::class, 'delete'])->name('tasks.delete');

# 以下、演習問題

Route::get('/quiz', function () {
    return view('question.quiz');
});

Route::get('/quiz2', [QuizController::class, 'index']);

Route::get('/quiz3', [QuizController::class, 'show']);

Route::get('/quiz4', [QuizController::class, 'quiz4_show']);

Route::get('/quiz5', [QuizController::class, 'login']);

Route::get('/quiz6_main', function () {
    return view ('common.main');
});

Route::get('/quiz6', [QuizController::class, 'quiz6_show'])->name('quiz6_test');

Route::get('/quiz7', [QuizController::class, 'quiz7_show']);

Route::get('/quiz8', [QuizController::class, 'quiz8_redirect']);

Route::get('/quiz9/{id}', [QuizController::class, 'quiz9_show'])->name('quiz9_test');

Route::post('/quiz9/{id}', [QuizController::class, 'quiz9_show'])->name('quiz9_test');

// クイズの登録画面の表示
Route::get('/quiz10', [QuizController::class, 'quiz10_show'])->name('quiz10_test');

// クイズの登録処理
Route::post('/quiz10/store', [QuizController::class, 'quiz10_store']) ->name('quiz10_test2');

// 読込処理①-1
Route::get('/quiz11/all', [QuizController::class, 'quiz11_show_all']);