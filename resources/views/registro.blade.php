@extends('components.navbar')
@section('contenido')

<title>CalmaTea - Iniciar Sesión</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">

<div class="container">
    <div class="login-box">
        <h2>Ábrete a<br>la atención plena</h2>
        <p>Registrate para continuar con tu salud emocional</p>
        <form method="POST" action="{{ route('guardaregistro') }}" onsubmit="return validarPassword()">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre *</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos *</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" placeholder="Ingrese su email" required autocomplete="@gmail.com">
            </div>

            <div class="form-group">
                <label for="password">Contraseña *</label>

                <input type="password" name="password" id="password" placeholder="Ingrese una contraseña" required>

                <!--<input type="checkbox" id="showPassword"> <label for="showPassword">Mostrar contraseña</label>--> <!-- Checkbox para mostrar la contraseña -->
                <small id="passwordHelp" class="error-message">La contraseña debe tener al menos 8 caracteres, incluir una letra mayúscula, una minúscula, un número y un carácter especial.</small>
                <small id="passwordLength" class="error-message">Debe tener al menos 8 caracteres.</small>
                <small id="passwordUpper" class="error-message">Debe incluir al menos una letra mayúscula.</small>
                <small id="passwordLower" class="error-message">Debe incluir al menos una letra minúscula.</small>
                <small id="passwordNumber" class="error-message">Debe incluir al menos un número.</small>
                <small id="passwordSpecial" class="error-message">Debe incluir al menos un carácter especial (@$!%*?&_).</small>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña *</label>
                <input type="password" name="password_confirmation" id="confirm_password" placeholder="Confirme su contraseña" required>
            </div>
            <input type="checkbox" id="showPassword"> <label for="showPassword">Mostrar contraseñas</label>
            <button type="submit" class="lginbttn">Registrate</button>
        </form>

        <p>¿Ya tienes una cuenta? <a href="{{route('logueo')}}" class="register-link">Inicia sesion</a></p>
    </div>
    <div class="illustration">
        <img src="{{asset('images/assets/girl_frog.png')}}" alt="Ilustración de niña con gorro de rana">
    </div>
</div>
<!-- Comienzan los scripts -->
<script>
    window.lengthCheck = function(value, minLength) {
        return value.length >= minLength;
    }
</script>

<!-- Codigo para la validacion de la contrasenia -->
<script>
    function validarPassword(event) {
        event.preventDefault();
        let isValid = true;

        // Ocultar todos los mensajes de error al inicio
        document.querySelectorAll('.error-message').forEach(el => {
            el.style.display = 'none';
        });

        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm_password").value;

        // Realizar todas las validaciones
        const validations = {
            lengthCheck: password.length >= 8,
            upperCheck: /[A-Z]/.test(password),
            lowerCheck: /[a-z]/.test(password),
            numberCheck: /\d/.test(password),
            specialCheck: /[@$!%*?&_]/.test(password),
            matchCheck: password === confirmPassword
        };

        // Mostrar mensajes de error específicos
        if (!validations.lengthCheck) {
            document.getElementById("passwordLength").style.display = 'block';
            isValid = false;
        }
        if (!validations.upperCheck) {
            document.getElementById("passwordUpper").style.display = 'block';
            isValid = false;
        }
        if (!validations.lowerCheck) {
            document.getElementById("passwordLower").style.display = 'block';
            isValid = false;
        }
        if (!validations.numberCheck) {
            document.getElementById("passwordNumber").style.display = 'block';
            isValid = false;
        }
        if (!validations.specialCheck) {
            document.getElementById("passwordSpecial").style.display = 'block';
            isValid = false;
        }

        // Validar coincidencia de contraseñas
        if (!validations.matchCheck) {
            alert("Las contraseñas no coinciden.");
            isValid = false;
        }

        // Si todo es válido, enviar formulario
        if (isValid) {
            event.target.submit();
        }

        return false;
    }

    // Mostrar y ocultar la contraseña al marcar o desmarcar el checkbox
    document.getElementById('showPassword').addEventListener('change', function() {
        var passwordField = document.getElementById('password');
        var confirmPasswordField = document.getElementById('confirm_password');
        var type = this.checked ? 'text' : 'password';
        passwordField.type = type;
        confirmPasswordField.type = type;
    });

    function redirigirPagina() {
        // Aquí agregas la redirección a la página que quieres
        window.location.href = "{{ route('hpView') }}"; // Redirige a la ruta hpView
    }
</script>

<!-- Codigo para el temporizador de los mensajes de error -->
<script>
    function showError(messageElement) {
        messageElement.style.display = 'block';

        // Eliminar temporizadores anteriores si existen
        if (messageElement.timeoutId) {
            clearTimeout(messageElement.timeoutId);
        }

        // Configurar desvanecimiento después de 5 segundos
        messageElement.timeoutId = setTimeout(() => {
            messageElement.classList.add('fade-out');

            // Ocultar completamente después de la transición
            setTimeout(() => {
                messageElement.style.display = 'none';
                messageElement.classList.remove('fade-out');
            }, 750);

        }, 5000);
    }

    // Modificar las líneas donde se muestran los errores (ejemplo):
    document.getElementById("passwordLength").style.display = lengthCheck ? "none" : showError(document.getElementById("passwordLength"));
</script>

<!-- Estilos de la pagina -->
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
        display: none;
        font-size: 14px;
        padding: 10px 15px;
        margin-top: 5px;
        border-radius: 4px;
        background: #fee;
        border: 1px solid #ff3860;
        color: #ff3860;
        position: relative;
        animation: slideIn 0.3s ease-out;
        width: 100%;
        box-sizing: border-box;
        opacity: 1;
        transition: opacity 0.5s ease;
    }

    .error-message::before {
        content: "⚠️";
        margin-right: 8px;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .error-message.fade-out {
        opacity: 0;
    }
</style>

@include('components.pagefoot')
@stop