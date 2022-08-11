<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])
    ->name('auth-login');

Route::post('/auth-action-login', [AuthController::class, 'loginAction'])
    ->name('auth-action-login');

Route::get("logout", [AuthController::class, "logout"])
    ->name("auth-logout");
