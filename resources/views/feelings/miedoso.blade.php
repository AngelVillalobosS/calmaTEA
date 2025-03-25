@extends('components.navbar')

@section('contenido')
<title>Tengo mucho miedo</title>

<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
<style>
     body{
        font-family: 'lato';
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
    .container-custom {
        width: 50%;
        margin-left: 25%;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 50px 10%;
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
    .back-btn-container img{
        margin-right: 25cm;
        margin-bottom: 1cm;
    }
</style>

<div class="container-custom">
    <div class="content-box">
        <div class="back-btn-container">
            <a href="{{ route('selecEmociones') }}" class="back-button">
                <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" width="70">
            </a>
        </div>
        
        <div class="text-with-image-left">
            <img src="{{ asset('images/assets/niña-miedo.png') }}" alt="Niña asustada" width="250">
            <h2>Parece que algo te ha asustado. ¡Es completamente normal sentirse así a veces! Vamos a calmar esa sensación.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <p>1. Mira a tu alrededor y observa con calma<br>A veces, el miedo se apaga cuando vemos que todo está en su lugar.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/observar2.png') }}" alt="Observar">
            </div>
                
            <p>2. Bebe agua o una bebida caliente<br>Una bebida reconfortante puede ayudar a sentirte más tranquilo.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/beber.png') }}" alt="Beber agua">
            </div>
                
            <p>3. Lee algo positivo o reconfortante<br>Una historia corta o una cita inspiradora pueden ayudarte.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/leer2.png') }}" alt="Leer">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">Recuerda, el miedo es solo una emoción momentánea. Tómate tu tiempo y pronto te sentirás más tranquilo.</h3>
            <img src="{{ asset('images/assets/niña-despedida3.png') }}" alt="Niña despidiéndose" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
