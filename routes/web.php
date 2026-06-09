<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/* Authentication */
Route::prefix('manager')->middleware(['auth', 'manager'])->group(function () {
    Route::resource('appointments', AppointmentController::class)->except(['show'])->names('manager.appointments');
    Route::resource('personnels', PersonnelController::class)->except(['show'])->names('manager.personnels');
    Route::resource('services', ServiceController::class)->except(['show'])->names('manager.services');
    Route::get('/', [ManagerController::class, 'index'])->name('manager.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login-submit');
});
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', fn() => view('loading'))->name('loading');
Route::get('/index', fn() => view('index'))->name('index');
