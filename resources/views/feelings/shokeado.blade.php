@extends('components.navbar')

@section('contenido')

<title>Me siento shokeado</title>

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
            <img src="{{ asset('images/assets/niña-sorpresa.png') }}" alt="Niña sorprendida" width="250">
            <h2>Parece que algo te ha sorprendido mucho. Vamos a tomarnos un momento para procesarlo.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <p>1. Tómate un momento para observar tu entorno<br>Mira a tu alrededor para sentirte más en control. A veces, centrarnos en lo que nos rodea nos ayuda a calmar el shock.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/observar.png') }}" alt="Observar">
            </div>
                
            <p>2. Haz una breve pausa para relajarte<br>Si te es posible, siéntate o acuéstate un momento y deja que tu cuerpo se relaje.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/relajarse.png') }}" alt="Relajarse">
            </div>
                
            <p>3. Escribe lo que sientes<br>Escribir sobre lo que acaba de suceder puede ayudarte a procesarlo y reducir la intensidad del shock.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/escribir.png') }}" alt="Escribir">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">Recuerda que el shock pasa, y con el tiempo todo se calma. Tómate tu tiempo y vuelve a sentirte en control.</h3>
            <img src="{{ asset('images/assets/niña-despedida3.png') }}" alt="Niña despidiéndose sorprendida" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
