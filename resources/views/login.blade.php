@extends('components.navbar')
@section('contenido')

<title>CalmaTea - Iniciar Sesión</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }

    .header {
        background-color: #f5e5d0;
        padding: 20px;
        text-align: left;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
        font-weight: 300;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        text-align: left;
        padding: 20px;
        gap: 20px;
    }

    .login-box {
        max-width: 400px;
        width: 100%;
    }

    .login-box h2 {
        font-family: 'Fraunces', serif;
        font-size: 68px;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0em;
        color: #014235;
    }

    .login-box p {
        font-size: 20px;
        color: #666;
    }

    .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        color: #014235;
        display: block;
        margin-bottom: 5px;
    }

    .footer {
        background-color: #5dc5dd;
        padding: 15px;
        text-align: center;
        color: white;
        width: 100%;
        position: relative;
    }

    .form-group input {
        width: 100%;
        padding: 5px;
        font-size: 16px;
        border: none;
        border-bottom: 1px solid #014235;
        background: transparent;
        outline: none;
        color: #014235;
    }

    .form-group input::placeholder {
        color: rgba(1, 66, 53, 0.6);
    }

    .login-box button {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #2a7f62;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .illustration img {
        max-width: 100%;
        height: auto;
        display: block;
    }

    .register-link {
        font-size: 16px;
        color: #2a7f62;
        text-decoration: none;
        font-weight: bold;
    }

    .register-link:hover {
        text-decoration: underline;
    }

    .error-message {
        color: red;
        display: none;
        font-size: 14px;
    }
</style>

<div class="container">
    <div class="login-box">
        <h2>Ábrete a<br>la atención plena</h2>
        <p>Inicia sesión para continuar con tu salud emocional</p>

        <!-- Mensajes de éxito -->
        @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Formulario de Inicio de Sesion -->
        <form method="POST" action="{{ route('login.post') }}">
            @csrf <!-- Añadir token CSRF -->

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su email" value="{{ old('email') }}" required>
            </div>

            <!-- Faltan los mensajes de error de password -->
            <div class="form-group">
                <label for="password">Contraseña *</label>
                <input type="password" id="password" name="password" required>
                <!-- Añade estos elementos -->
                <div class="text-danger">
                    @error('password') {{ $message }} @enderror
                </div>
            </div>

            <!-- Recordar sesión -->
            <div class="mb-3 form-check">
                <input
                    type="checkbox"
                    class="form-check-input"
                    id="remember"
                    name="remember">
                <label class="form-check-label" for="remember">Recordar sesión</label>
            </div>

            <!-- Mostrar errores -->
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <button type="submit" class="lginbttn">Iniciar Sesion</button> <!-- Cambiar a type="submit" -->
        </form>
        <p>¿No tienes una cuenta? <a href="{{route('formularioregistro')}}" class="register-link">Registrate Aquí</a></p>
    </div>
    <div class="illustration">
        <img src="{{asset('images/assets/girl_frog.png')}}" alt="Ilustración de niña con gorro de rana">
    </div>
</div>

<script>
    document.getElementById('password').addEventListener('input', function() {
        var password = document.getElementById("password").value;
        var lengthCheck = password.length >= 8;
        var upperCheck = /[A-Z]/.test(password);
        var lowerCheck = /[a-z]/.test(password);
        var numberCheck = /\d/.test(password);
        var specialCheck = /[@$!%*?&_]/.test(password);

        document.getElementById("passwordLength").style.display = lengthCheck ? "none" : "block";
        document.getElementById("passwordUpper").style.display = upperCheck ? "none" : "block";
        document.getElementById("passwordLower").style.display = lowerCheck ? "none" : "block";
        document.getElementById("passwordNumber").style.display = numberCheck ? "none" : "block";
        document.getElementById("passwordSpecial").style.display = specialCheck ? "none" : "block";

        return lengthCheck && upperCheck && lowerCheck && numberCheck && specialCheck;
    });
</script>

<style>
    /* Añadir estas clases para errores */
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .alert-danger p {
        margin: 5px 0;
    }

    .is-invalid {
        border-color: #dc3545 !important;
    }
</style>
<!-- Estilo de los mensajes de Exito -->
<style>
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
        animation: slideIn 0.3s ease-out;
    }

    /* Reutiliza la animación de los mensajes de error */
    @keyframes slideIn {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
@include('components.pagefoot')
@stop