@extends('components.navbar')

@section('contenido')
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
<title>Me siento aburrido</title>

<style>
    body{
        font-family: 'lato';
    }
    .container-custom {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 50px 10%;
    }

    .content-box {
        padding: 1.3rem;
        max-width: 700px;
        text-align: justify;
    }

    .content-box h2 {
        float: right;
        color: #014235;
        font-family: 'Fraunces';
        font-size: 2.4rem;
    }
    .content-box h3{
        padding-top: 1rem;
        font-family: 'Fraunces';
        color: #014235;
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
            <img src="{{ asset('images/assets/sleepping_girl.png') }}" alt="Niña con mensaje" width="250">
            <h2>¿Te sientes aburrido?<br>¡Está bien! A veces, el aburrimiento es la oportunidad perfecta para descubrir algo nuevo.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <p>1. Dibuja, escribe o arma un rompecabezas. ¡Deja volar tu imaginación!</p>
            <img src="{{ asset('images/assets/dibujo.png') }}" alt="Dibujar">
            <img src="{{ asset('images/assets/escribir.png') }}" alt="Escribir">
            <img src="{{ asset('images/assets/rompecabezas.png') }}" alt="Rompecabezas">

            <p>2. Lee un dato curioso, aprende una palabra en otro idioma o mira un video interesante.</p>
            <img src="{{ asset('images/assets/leer.png') }}" alt="Leer">
            <img src="{{ asset('images/assets/aprender.png') }}" alt="Aprender">
            <img src="{{ asset('images/assets/video.png') }}" alt="Ver video">

            <p>3. Pon tu canción favorita o descubre nuevos sonidos relajantes.</p>
            <img src="{{ asset('images/assets/musica.png') }}" alt="Escuchar música">
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">El aburrimiento no dura para siempre. A veces, solo necesitas un pequeño empujón para descubrir algo interesante. ¡Anímate a probar algo nuevo!</h3>
            <img src="{{ asset('images/assets/flowerhat_girl.png') }}" alt="Niña despidiéndose" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
