<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;

class registroController extends Controller
{
    public function formularioregistro()
    {
        return view('registro');
    }

    public function showLoginForm()
    {
        return view('login'); // Asegúrate que esta vista existe
    }

    public function guardaregistro(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);

        usuarios::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('logueo')
        ->with('success', '¡Registro exitoso! Por favor inicia sesión');
    }
}
