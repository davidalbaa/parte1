<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsuariosController::class, 'index'])
    ->name('usuarios');
Route::get('/create', [UsuariosController::class, 'create'])
    ->name('usuarios-create');
Route::get('/edit/{user}', [UsuariosController::class, 'edit'])
    ->name('usuarios-edit');
Route::get('/show/{user}', [UsuariosController::class, 'show'])
    ->name('usuarios-show');
Route::post('/store', [UsuariosController::class, 'store'])
    ->name('usuarios-store');
Route::put('/update/{user}', [UsuariosController::class, 'update'])
    ->name('usuarios-update');
Route::delete('/destroy/{user}', [UsuariosController::class, 'destroy'])
    ->name('usuarios-destroy');
