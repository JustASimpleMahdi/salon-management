<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/* Authentication */
Route::middleware(['auth'])->group(function () {
    Route::get('/appointments', [UserAppointmentController::class, 'index'])->name('appointments.index');

    Route::post('/reservation/appointment/{appointment}/service/{service}/personnel/{personnel}', [ReservationController::class, 'confirm'])->name('reservation.confirm');
    Route::get('/reservation/appointment/{appointment}/service/{service}/personnel/{personnel}', [ReservationController::class, 'confirmation'])->name('reservation.confirmation');
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/services', [ReservationController::class, 'services'])->name('reservation.services');

    Route::get('/', [UserDashboardController::class, 'index'])->name('index');
});

Route::prefix('manager')->middleware(['auth', 'manager'])->group(function () {
    Route::resource('appointments', AppointmentController::class)->except(['show'])->names('manager.appointments');
    Route::resource('personnels', PersonnelController::class)->except(['show'])->names('manager.personnels');
    Route::resource('services', ServiceController::class)->except(['show'])->names('manager.services');
    Route::get('/', [ManagerController::class, 'index'])->name('manager.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
    Route::post('/signin', [AuthController::class, 'signinSubmit'])->name('signin-submit');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login-submit');
});
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

//Route::get('/', fn() => view('loading'))->name('loading');
