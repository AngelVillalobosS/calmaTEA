@extends('components.navbar')

@section('contenido')

<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
<title>Me siento Amado!!</title>
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
            <img src="{{ asset('images/assets/niña-amor.png') }}" alt="Niña amorosa" width="250">
            <h2>¡Qué bonito que te sientas amado! El cariño que recibimos es un regalo que siempre nos llena el corazón.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            
            <p>1. Conecta con alguien especial<br>Envía un mensaje cariñoso a alguien importante para ti, solo para recordarles cuánto los aprecias.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/conectar.png') }}" alt="Conectar">
            </div>
               
            <p>2. Recuerda un momento especial<br>Piensa en un recuerdo feliz con alguien que te haga sentir querido, y deja que esa sensación te llene.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/recuerdo.png') }}" alt="Recuerdo">
            </div>
                
            <p>3. Haz algo especial por ti mismo<br>Regálate un pequeño detalle, como un momento de descanso o tu comida favorita.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/detalle.png') }}" alt="Detalle">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">El amor y el cariño son lo que nos conecta con los demás. Nunca olvides lo valioso que eres para quienes te rodean.</h3>
            <img src="{{ asset('images/assets/niña-despedida4.png') }}" alt="Niña despidiéndose amorosa" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop