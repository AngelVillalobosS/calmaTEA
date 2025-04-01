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
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario
        usuarios::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Asegúrate de cifrar la contraseña
        ]);

        return redirect()->route('hpView')->with('success', 'Usuario registrado correctamente');
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
