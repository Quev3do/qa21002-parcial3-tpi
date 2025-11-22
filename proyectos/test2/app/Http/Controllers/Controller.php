<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use Illuminate\Http\Request;

abstract class Controller
{
    public function index()
    {
        $title = 'usuarios';
        $usuarios = usuarios::all();
        return view('welcome', compact('usuarios')); 
    }
}
