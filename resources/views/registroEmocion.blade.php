@include('components.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Registra tus emociones</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<style>
    body {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }
    .header img {
        width: 273px;
        height: 273px;
        margin-right: 15px;
    }

    .header h1 {
        font-size: 36px;
        color: #014235;
        margin: 0;
        font-family: 'Fraunces', serif;
    }

    h2 {
        font-family: 'Fraunces', serif;
        font-size: 55px;
        color: #014235;
        display: flex;
        align-items: center;
        justify-content: justify;
        max-width: 800px;
        margin: 20px auto;
    }

    h2 img {
        margin-right: 15px;
    }
    .container-custom {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 50px 0;
    }

    .title {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .main-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        align-items: flex-start;
        width: 100%;
        max-width: 1200px;
        margin-top: 30px;
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
        width: 9rem;
        height: 9rem;
    }

    .emoji-button.selected {
        border-color: #014235;
        background-color: rgba(1, 66, 53, 0.1);
    }

    .form-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        max-width: 400px;
        height: 100%;
    }

    .form-container label, .form-container input, .form-container button {
        margin-top: 15px;
        width: 100%;
        text-align: left;
    }
    label {
            font-size: 20px;
            color: #014235;
            display: block;
            margin-top: 15px;
        }

    .footer {
        text-align: center;
        margin-top: 50px;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
    
    .submit-button {
            font-size: 17px;
            color: #014235;
            border: 2px solid #014235;
            background-color: transparent;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .submit-button:hover {
            background-color: #014235;
            color: white;
        }
</style>
</head>

<body>
<div class="container-custom">

    <div class="title">
        <h2>¿Cómo te encuentras hoy?
            <br>¡Cuéntanos!
        </h2>
    </div>

    <div class="main-content">
        <!-- Emojis Section -->
        <div class="emoji-grid">
            @php
                $emociones = [
                    'nervioso' => 'Nervioso',
                    'aburrido' => 'Aburrido',
                    'travieso' => 'Travieso',
                    'contento' => 'Contento',
                    'miedoso' => 'Miedoso',
                    'triste' => 'Triste',
                    'shokeado' => 'Shokeado',
                    'amado' => 'Amado',
                    'enojado' => 'Enojado'
                ];
            @endphp

            @foreach ($emociones as $key => $value)
                <button class="emoji-button" data-emocion="{{ $key }}">
                    <img src="{{ asset('images/assets/'.$key.'.png') }}" alt="Boton de {{ $value }}">
                    <p>{{ $value }}</p>
                </button>
            @endforeach
        </div>
        
        <!-- Formulario a la derecha de las emociones -->
        <div class="form-container">
            <label>¿Qué causó esta emoción?</label>
            <input type="text" id="causa_emocion"  required>
            
            <label>Preciona el botón para recibir un consejo</label>            
            <button type="button" class="submit-button" id="enviar">Enviar</button>
        </div>
    </div>
</div>

<script>
    let emocionSeleccionada = null;

    // Manejar la selección de emoción
    document.querySelectorAll(".emoji-button").forEach(button => {
        button.addEventListener("click", function() {
            // Quitar selección previa
            document.querySelectorAll(".emoji-button").forEach(btn => btn.classList.remove("selected"));
            
            // Marcar como seleccionado
            this.classList.add("selected");
            
            // Guardar la emoción seleccionada
            emocionSeleccionada = this.getAttribute("data-emocion");
        });
    });

    // Manejar el clic en el botón "Enviar"
    document.getElementById("enviar").addEventListener("click", function() {
        let causaEmocion = document.getElementById("causa_emocion").value.trim();

        // Verificar si se seleccionó una emoción
        if (!emocionSeleccionada) {
            alert("Por favor, selecciona una emoción antes de continuar.");
            return;  // Detiene la ejecución
        }

        // Verificar si la pregunta ha sido respondida
        if (causaEmocion === "") {
            alert("Por favor, responde la pregunta '¿Qué causó esta emoción?' antes de continuar.");
            return;  // Detiene la ejecución
        }

        
        // Obtener la URL generada por Laravel (Blade)
        let urlRedireccion = "{{ route('emocion', ':emocion') }}".replace(':emocion', emocionSeleccionada);

        // Redirigir a la página correspondiente
        window.location.href = urlRedireccion;
    });
</script>


@include('components.pagefoot')
</body>

</html>
