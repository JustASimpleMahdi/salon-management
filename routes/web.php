<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

/* Authentication */
Route::prefix('manager')->middleware(['auth', 'manager'])->group(function () {
    Route::get('/', [ManagerController::class, 'index'])->name('manager.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login-submit');
});
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', fn() => view('loading'))->name('loading');
Route::get('/index', fn() => view('index'))->name('index');
