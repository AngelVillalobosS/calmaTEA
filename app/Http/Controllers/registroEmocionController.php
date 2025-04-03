<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Emociones;

class RegistroEmocionController extends Controller
{
    public function mostrarCalendario()
    {
        $emociones = emociones::all(); // Obtener todas las emociones de la base de datos
        return view('calendario', compact('emociones'));
    }

    public function registrarEmocion(Request $request)
    {
        \Log::info($request->all());

        $request->validate([
            'emocion' => 'required',
            'intensidad' => 'required',
            'cuerpo' => 'required',
            'gusto' => 'required',
            'paso' => 'required',
            'razon' => 'nullable',
            'repeticion' => 'nullable',
            'cambiar' => 'required',
            'ayuda' => 'required',
            'animal' => 'required',
        ]);

        $fechaHoy = Carbon::now()->timezone('America/Mexico_City')->toDateString();

        // Verificar si ya existe un registro en la misma fecha
        if (Emociones::whereDate('fecha', $fechaHoy)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Ya has registrado una emoción hoy. Inténtalo mañana.',
            ], 400);
        }

        $emojiMap = [
            'Nervioso' => '😬',
            'Aburrido' => '😒',
            'Travieso' => '😏',
            'Contento' => '😊',
            'Miedoso' => '😱',
            'Triste' => '😢',
            'Shokeado' => '😲',
            'Amado' => '🥰',
            'Enojado' => '😡',
        ];

        $emocion = new Emociones();
        $emocion->emocion = $request->emocion;
        $emocion->emoji = $emojiMap[$request->emocion] ?? '';
        $emocion->intensidad = $request->intensidad;
        $emocion->cuerpo = $request->cuerpo;
        $emocion->gusto = $request->gusto;
        $emocion->paso = $request->paso;
        $emocion->razon = $request->razon;
        $emocion->repeticion = $request->repeticion;
        $emocion->cambiar = $request->cambiar;
        $emocion->ayuda = $request->ayuda;
        $emocion->animal = $request->animal;
        $emocion->fecha = $fechaHoy;
        $emocion->save();

        return response()->json([
            'success' => true,
            'message' => 'Respuesta guardada correctamente',
            'emoji' => $emocion->emoji
        ]);
    }
}

