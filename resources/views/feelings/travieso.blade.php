@extends('components.navbar')

@section('contenido')

<title>Me siento travieso</title>

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
            <img src="{{ asset('images/assets/niña-traviesa.png') }}" alt="Niña traviesa" width="250">
            <h2>¡Vaya! Parece que hoy tienes un espíritu travieso.<br>¿Listo para hacer algo divertido?</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <div class="text-with-image">
                <p>1. Haz una pequeña broma (inofensiva) o reta a alguien a un juego que ponga a prueba tus habilidades.</p>
                <img src="{{ asset('images/assets/broma.png') }}" alt="Broma">
            </div>

            <div class="text-with-image">                
                <p>2. Imagina que eres un personaje de película en una misión secreta. ¡Actúa como tal por un momento!</p>
                <img src="{{ asset('images/assets/mision.png') }}" alt="Misión secreta">
            </div>
                
            <div class="text-with-image">
                <p>3. Reorganiza algo en tu entorno de manera creativa y observa si alguien nota el cambio.</p>
                <img src="{{ asset('images/assets/reorganizar.png') }}" alt="Reorganizar">
            </div>
        </div>

        <p>¿Quieres escribir cómo te sientes ahora?</p>
        <input type="text" class="form-control w-50 mx-auto">
        <div class="mt-4">
            <button class="btn btn-outline-success">Enviar</button>
        </div>

        <div class="text-with-image-left">
            <h3 class="mt-4">El espíritu travieso puede ser muy divertido, pero recuerda siempre mantener la diversión respetuosa.<br>¡Las buenas risas son las mejores travesuras!</h3>
            <img src="{{ asset('images/assets/niña-despedida-traviesa.png') }}" alt="Niña despidiéndose traviesa" width="250">
        </div>
    </div>
</div>

@include('components.pagefoot')
@stop
