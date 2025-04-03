<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    // Logueo
    public function loginView(){
        return view('login');
    }

    // Vistas principales
    public function homepageView(){
        return view('homepage');
    }
    public function calendarView(){
        return view('subviews.calendar');
    }
   

    public function calmaEstresView(){
        return view('calmaestres');
    }
    
    public function ejerciciosView(){
        return view('ejercicios');
    }

    // Subvistas
    public function diarioView(){
        return view ('diario');
    }

    // Vista de las emociones
    public function mostrarEmocion($emocion)
    {
        return view('emociones.'.$emocion);
    }
    
    public function selecEmocionesView()
    {
        return view('registroEmocion');
    }

    public function selecNerviosoView()
    {
        return view('emociones.nervioso');
    }   
    
    public function selecAburridoView()
    {
        return view('emociones.aburrido');
    }   
    
    public function selecTraviesoView()
    {
        return view('emociones.travieso');
    }    

    public function selecContentoView()
    {
        return view('emociones.contento');
    } 
    
    public function selecMiedosoView()
    {
        return view('emociones.miedoso');
    } 

    public function selecTristeView()
    {
        return view('emociones.triste');
    }

    public function selecShokeadoView()
    {
        return view('emociones.shokeado');
    } 

    public function selecAmadoView()
    {
        return view('emociones.amado');
    }  

    public function selecEnojadoView()
    {
        return view('emociones.enojado');
    }
}
