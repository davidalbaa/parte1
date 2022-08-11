<?php

use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoriasController::class, 'index'])
    ->name('categorias');

Route::get('/create', [CategoriasController::class, 'create'])
    ->name('categorias-create');

Route::get('/edit/{categoria}', [CategoriasController::class, 'edit'])
    ->name('categorias-edit');

Route::get('/show/{categoria}', [CategoriasController::class, 'show'])
    ->name('categorias-show');

Route::post('/store', [CategoriasController::class, 'store'])
    ->name('categorias-store');

Route::put('/update/{categoria}', [CategoriasController::class, 'update'])
    ->name('categorias-update');

Route::delete('/destroy/{categoria}', [CategoriasController::class, 'destroy'])
    ->name('categorias-destroy');
