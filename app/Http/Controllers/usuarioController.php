<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios; // Asegúrate de que el modelo se llame usuarios
use Illuminate\Support\Facades\Hash;

class usuarioController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
        
        // Creación del usuarios
        usuarios::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('hpView')->with('success', 'Registro exitoso!');
    }
}