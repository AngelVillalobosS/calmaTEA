@extends('components.navbar')
@section('contenido')

<title>Registra tus emociones</title>

<style>
    .container-custom {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 50px 0;
    }

    .emoji-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-content: center;
        max-width: 400px;
        margin: 20px auto;
    }

    .emoji-button {
        background: none;
        border: none;
        cursor: pointer;
    }

    .emoji-button img {
        width: 80px;
        height: 80px;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
</style>

<div class="container-custom">

    <div class="back-button-container">
        <a href="{{route('hpView')}}" class="back-button">
            <img src="{{ asset('images/assets/flecha.png')}}" alt="Boton de Regresar" width="70">
        </a>
    </div>

    <h2>¿Cómo te encuentras hoy?
        <br>¡Cuéntanos!
    </h2>

    <div class="emoji-grid">
        <button class="emoji-button" onclick="location.href='{{ route('selecNervioso') }}'">
            <img src="{{ asset('images/assets/nervioso.png')}}" alt="Boton de Nervioso" width="250">
            <p>Nervioso</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecAburrido') }}'">
            <img src="{{ asset('images/assets/aburrido.png')}}" alt="Boton de Aburrido" width="250">
            <p>Aburrido</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecTravieso') }}'">
            <img src="{{ asset('images/assets/travieso.png')}}" alt="Boton de Travieso" width="250">
            <p>Travieso</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecContento') }}'">
            <img src="{{ asset('images/assets/contento.png')}}" alt="Boton de Contento" width="250">
            <p>Contento</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecMiedoso') }}'">
            <img src="{{ asset('images/assets/miedoso.png')}}" alt="Boton de Miedoso" width="250">
            <p>Miedoso</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecTriste') }}'">
            <img src="{{ asset('images/assets/triste.png')}}" alt="Boton de Triste" width="250">
            <p>Triste</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecShokeado') }}'">
            <img src="{{ asset('images/assets/shokeado.png')}}" alt="Boton de Shokeado" width="250">
            <p>Shokeado</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecAmado') }}'">
            <img src="{{ asset('images/assets/amado.png')}}" alt="Boton de Amado" width="250">
            <p>Amado</p>
        </button>
        <button class="emoji-button" onclick="location.href='{{ route('selecEnojado') }}'">
            <img src="{{ asset('images/assets/enojado.png')}}" alt="Boton de Enojado" width="250">
            <p>Enojado</p>
        </button>
    </div>

    <div class="mt-4">
        <label>¿Qué causó esta emoción?</label>
        <input type="text" class="form-control w-50 mx-auto">
    </div>

    <div class="mt-3">
        <label>¿Quieres recibir una sugerencia para mejorar tu estado de ánimo?</label>
        <input type="text" class="form-control w-50 mx-auto">
    </div>

    <div class="mt-4">
        <button class="btn btn-outline-success"> <a href="{{route('diario')}}">Enviar</a></button>
    </div>

    <div class="mt-3">
        <label>¿Deseas ver tu calendario emocional?</label>
    </div>

    <div class="mt-3">
        <button class="btn btn-outline-primary"> <a none; href="{{route('calendario')}}">Continuar</a></button>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 CalmaTea</p>
</div>

@stop