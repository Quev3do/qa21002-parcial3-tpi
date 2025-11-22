<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use App\Models\universidad;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function index()
    {
        $title = 'usuarios';
        $usuarios = usuarios::all();
        return view('welcome', compact('usuarios')); 
    }

    public function store()
    {
        $universidades = universidad::all();
        return view('form', compact('universidades'));
    }

    public function create(Request $request)
    {
        $user = New usuarios;
        $user->name = $request->name;
        $user->edad = $request->edad;
        $user->idUniversidads = $request->uni;
        $user->save();

        $usuarios = usuarios::all();

        //return view('welcome', compact('usuarios'));
        return redirect()->route('usuarios.index', compact('usuarios'));
    }
}
