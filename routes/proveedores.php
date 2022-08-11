<?php

use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProveedoresController::class, 'index'])
    ->name('proveedores');

Route::get('/create', [ProveedoresController::class, 'create'])
    ->name('proveedores-create');

Route::get('/edit/{proveedor}', [ProveedoresController::class, 'edit'])
    ->name('proveedores-edit');

Route::get('/show/{proveedor}', [ProveedoresController::class, 'show'])
    ->name('proveedores-show');

Route::post('/store', [ProveedoresController::class, 'store'])
    ->name('proveedores-store');

Route::put('/update/{proveedor}', [ProveedoresController::class, 'update'])
    ->name('proveedores-update');

Route::delete('/destroy/{proveedor}', [ProveedoresController::class, 'destroy'])
    ->name('proveedores-destroy');
