<?php

use App\Http\Controllers\usuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [usuariosController::class, 'index'])->name('usuarios.index');

Route::get('/create', [usuariosController::class, 'store'])->name('usuarios.store');

Route::post('/create', [usuariosController::class, 'create'])->name('usuarios.create');
