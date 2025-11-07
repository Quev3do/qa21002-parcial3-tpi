<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome'); });

Route::get('/', [ProductosController::class, 'index'])->name('productos.index');
