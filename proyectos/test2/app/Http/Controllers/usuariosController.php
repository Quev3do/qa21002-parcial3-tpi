<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use App\Models\universidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    public function index()
    {
        $title = 'usuarios';
        $usuarios = usuarios::all();
        return view('welcome', compact('usuarios')); 
    }

    public function login(Request $request)
    {
        $credentials = [
            "username" => $request->username,
            "password" => $request->password,
            //puedes poner maas parametros
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            $usuarios = usuarios::all();

            return redirect()->route('usuarios.index');
            //return redirect()->intented(route('usuarios.index'));
        }else{
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('inicio'));
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
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->idUniversidads = $request->uni;
        $user->save();

        $usuarios = usuarios::all();

        //return view('welcome', compact('usuarios'));
        return redirect()->route('usuarios.index', compact('usuarios'));
    }
}
