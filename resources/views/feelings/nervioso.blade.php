@extends('components.navbar')

@section('contenido')

<title>Estoy muy nervioso...</title>

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
        margin: 10px 0;
    }
    .back-button-container2 {
        display: flex;
        justify-content: flex-start; 
        width: 100%; 
    }
    
</style>

<div class="container-custom">

        <div class="back-button-container2">
            <a href="{{ route('selecEmociones') }}" class="back-button">
                <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" width="70">
            </a>
        </div>

        <div class="text-with-image-left">
            <img src="{{ asset('images/assets/niña-mensaje.png') }}" alt="Niña con mensaje" width="250">
            <h2 >Lo que sientes es válido.<br>Inhala profundo, aquí estás a salvo.</h2>
        </div>

        <h3>Realiza lo siguiente:</h3>

        <div class="exercise-list">
            <div class="text-with-image">
                <p>1. Inhala por la nariz en 4 segundos, aguanta 4 segundos y exhala en 4 segundos.</p> 
                <img src="{{ asset('images/assets/respiracion.png') }}" alt="Ejercicio de respiración" width="250">
            </div>

            <div class="text-with-image">
                <p>2. Aprieta una pelota antiestrés o un objeto suave durante 5 segundos y suéltalo.</p>
                <img src="{{ asset('images/assets/pelota-estres.png') }}" alt="Pelota antiestrés">
            </div>

            <p>3. Observa a tu alrededor y encuentra:</p>
            <ul class="emoji-list">
                <li>✅ <b>5</b> cosas que puedes ver 👀</li>
                <li>✅ <b>4</b> cosas que puedes tocar ✋</li>
                <li>✅ <b>3</b> cosas que puedes oír 👂</li>
                <li>✅ <b>2</b> cosas que puedes oler 👃</li>
                <li>✅ <b>1</b> cosa que puedes saborear 👅</li>
            </ul>

            <p>¿Quieres escribir cómo te sientes ahora?</p>
            <input type="text" class="form-control w-50 mx-auto">
        </div>

        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">Estoy aquí para ti.<br>Puedes volver cuando lo necesites.</h3>
            <img src="{{ asset('images/assets/niña-despedida.png') }}" alt="Niña despidiéndose" width="250">
        </div>

    </div>
</div>

@include('components.pagefoot')
@stop
