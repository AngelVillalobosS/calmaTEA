@extends('components.navbar')

@section('contenido')

<title>Me siento Contento!!</title>

<style>
    .container-custom {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 50px 10%;
    }

    .content-box {
        max-width: 700px;
        text-align: left;
    }

    .content-box h2 {
        font-size: 24px;
        font-weight: bold;
    }

    .content-box p {
        font-size: 18px;
    }

    .exercise-list {
        text-align: left;
        font-size: 18px;
    }

    .exercise-list img {
        max-width: 150px;
        margin: 10px;
    }
</style>

<div class="container-custom">
    <div class="content-box">
    <div class="back-button-container2">
            <a href="{{ route('selecEmociones') }}" class="back-button">
                <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" width="70">
            </a>
        </div>
        
        <div class="text-with-image-left">
            <img src="{{ asset('images/assets/niña-feliz.png') }}" alt="Niña feliz" width="250">
            <h2>"¡Qué bien que te sientas contento!<br>Es un gran día para disfrutar."</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <div class="text-with-image">
                <p>1. Haz algo positivo por los demás:<br> Sorprende a alguien con una sonrisa, un mensaje o un pequeño gesto amable.</p>
                <img src="{{ asset('images/assets/gato-perro.png') }}" alt="Gato y perro felices">
                
                <p>2. Escribe o comparte lo que te hace feliz:<br> Escribe tres cosas que te hacen sonreír o cuenta algo divertido que te haya pasado hoy.</p>
                <img src="{{ asset('images/assets/escribir-feliz.png') }}" alt="Escribir felicidad">
                
                <p>3. Disfruta del momento:<br> Tómate un momento para respirar profundamente y sentir gratitud por lo que te hace feliz.</p>
                <img src="{{ asset('images/assets/musica-feliz.png') }}" alt="Escuchar música feliz">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">La felicidad es contagiosa, ¡sigue compartiendo esa energía positiva!<br>Que tu día siga lleno de sonrisas.</h3>
            <img src="{{ asset('images/assets/niña-despedida-feliz.png') }}" alt="Niña despidiéndose feliz" width="250">
        </div>
    </div>
</div>
niña-despedida-feliz
@include('components.pagefoot')
@stop
