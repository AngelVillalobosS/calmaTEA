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
    
    // Subvistas
    public function diarioView(){
        return view ('diario');
    }

    // Vista de las emociones
    public function selecEmocionesView()
    {
        return view('registroEmocion');
    }

    public function selecNerviosoView()
    {
        return view('feelings.nervioso');
    }   
    
    public function selecAburridoView()
    {
        return view('feelings.aburrido');
    }   
    
    public function selecTraviesoView()
    {
        return view('feelings.travieso');
    }    

    public function selecContentoView()
    {
        return view('feelings.contento');
    } 
    
    public function selecMiedosoView()
    {
        return view('feelings.miedoso');
    } 

    public function selecTristeView()
    {
        return view('feelings.triste');
    }

    public function selecShokeadoView()
    {
        return view('feelings.shokeado');
    } 

    public function selecAmadoView()
    {
        return view('feelings.amado');
    }  

    public function selecEnojadoView()
    {
        return view('feelings.enojado');
    }
}
