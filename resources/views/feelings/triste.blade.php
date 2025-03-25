@extends('components.navbar')

@section('contenido')

<title>Me siento triste...</title>

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
            <img src="{{ asset('images/assets/niña-triste.png') }}" alt="Niña triste" width="250">
            <h2>Siento que estés triste. A veces, las emociones pueden ser intensas, pero con el tiempo cambian. No estás solo, estoy aquí para ti.</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <p>1. Haz una pausa y respira profundamente<br>Cierra los ojos y respira lentamente. Deja que el aire te calme poco a poco.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/respirar.png') }}" alt="Respirar">
            </div>
                
            <p>2. Haz algo que te consuele<br>Envuélvete en una manta, mira una película que te haga sentir mejor o pasa tiempo con una mascota.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/consuelo.png') }}" alt="Consuelo">
            </div>
                
            <p>3. Dale un poco de movimiento a tu cuerpo<br>Camina un poco al aire libre o haz algunos estiramientos. A veces el movimiento ayuda a despejar la mente.</p>
            <div class="text-with-image">
                <img src="{{ asset('images/assets/movimiento.png') }}" alt="Movimiento">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">Recuerda que está bien sentir tristeza, pero también sabes que puedes salir de ella. Tómate tu tiempo y sigue adelante con calma.</h3>
            <img src="{{ asset('images/assets/niña-despedida3.png') }}" alt="Niña despidiéndose triste" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
