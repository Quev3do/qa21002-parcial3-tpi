<?php

use App\Http\Controllers\usuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('inicio'); })->name('inicio');

Route::view('/login', "login")->name('login');

Route::post('/login', [usuariosController::class, 'login'])->name('usuarios.login');

Route::get('/logout', [usuariosController::class, 'logout'])->name('usuarios.logout');

Route::get('/usuarios', [usuariosController::class, 'index'])->middleware('auth')->name('usuarios.index');

Route::get('/create', [usuariosController::class, 'store'])->middleware('auth')->name('usuarios.store');

Route::post('/create', [usuariosController::class, 'create'])->middleware('auth')->name('usuarios.create');
