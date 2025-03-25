@extends('components.navbar')

@section('contenido')

<title>Me siento Enojado</title>

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
            <img src="{{ asset('images/assets/niña-molesta.png') }}" alt="Niña molesta" width="250">
            <h2>Parece que estás molesto. Vamos a buscar formas de liberar esa energía.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <p>1. Reflexiona sobre lo que te molesta<br>Tomáte un minuto para pensar qué es lo que realmente te está enojando. A veces verbalizarlo ayuda a liberarlo.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/reflexionar.png') }}" alt="Reflexionar" width="250">
            </div>
                           
            <p>2. Haz algunos ejercicios de relajación o meditación<br>Prueba meditar por unos minutos, visualizar un lugar tranquilo o hacer algunos estiramientos.</p>
            <div class="text-with-image"> 
                <img src="{{ asset('images/assets/meditacion.png') }}" alt="Meditación"> width="250"
            </div>
                
            <p>3. Mueve tu cuerpo de forma suave<br>Un paseo corto o estirarte puede ayudar a liberar la tensión acumulada.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/ejercicio.png') }}" alt="Ejercicio" width="250">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <img src="{{ asset('images/assets/niña-despedida3.png') }}" alt="Niña despidiéndose" width="250">
            <h3 class="mt-4">El enojo es una emoción que se puede liberar de forma positiva. Tu bienestar es lo más importante.</h3>
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
