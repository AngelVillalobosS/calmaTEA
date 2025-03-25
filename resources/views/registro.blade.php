@extends('components.navbar')
@section('contenido')

<div class="container-custom">
    <div class="form-container">
        <h2>
            Ábrete a la <br>
            atención plena
        </h2>
        <p>Regístrate para gestionar tu bienestar emocional</p>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-outline-dark">Registrarte</button>
        </form>
        <p class="mt-3">¿Ya tienes una cuenta? <a href="#">Inicia sesión</a></p>
    </div>
    <div class="image-container">
        <img src="{{ asset('CalmaTEA/public/imagenes/ima1.PNG') }}" alt="Imagen">
    </div>
</div>

@stop