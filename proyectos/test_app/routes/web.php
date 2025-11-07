<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome'); });

Route::get('/', [ProductosController::class, 'index'])->name('productos.index');

Route::get('/banco', [ProductosController::class, 'index'])->name('banco.index');

Route::post('/banco', [ProductosController::class, 'procesar'])->name('banco.pros');
