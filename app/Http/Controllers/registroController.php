<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registroController extends Controller
{
    public function formularioregistro()
    {
        return view('registro');
    }

    public function guardaregistro(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $usuarios = new usuarios;
        $usuarios -> email = $request->email;
        $usuarios -> password = $request->password;

        Auth::login($usuarios);
        return redirect()->route('inicio');
    }

    public function formulariologin()
    {
        return view('login');
    }

    public function guardalogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('inicio');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
}
