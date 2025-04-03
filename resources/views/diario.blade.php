@include('components.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Cómo te sientes?</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
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

        .form-container {
            max-width: 600px;
            margin: auto;
            text-align: left;
        }

        label {
            font-size: 20px;
            color: #014235;
            display: block;
            margin-top: 15px;
        }

        select,
        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        .hidden {
            display: none;
        }

        .back-btn-container {
            margin-left: 20%;
            margin-top: 3%;
        }

        /* Estilos para el footer */
        .footer-text {
            max-width: 600px;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            font-family: 'Fraunces', serif;
            font-size: 35px;
            color: #014235;
        }

        .footer-text img {
            width: 280px;
            height: 280px;
        }

        .back-btn-container {
            position: absolute;
            /* Hace que la flecha esté fuera del flujo normal */
            top: 200px;
            /* Ajusta la distancia desde la parte superior de la página */
            left: -3em;
            /* Ajusta la distancia desde el borde izquierdo */
            z-index: 10;
            /* Asegura que la flecha esté por encima de otros elementos si es necesario */
        }



        .back-arrow {
            width: 120px;
            /* Ajusta el tamaño de la flecha */
            height: auto;
            /* Mantén la proporción de la imagen */
        }
    </style>
</head>

<body>
    <div class="back-btn-container">
        <a href="{{ route('selecEmociones') }}" class="back-button">
            <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" class="back-arrow">
        </a>
    </div>
    <h2>
        <img src="{{ asset('images/assets/sobre.png')}}" alt="" width="273" height="273">
        Tu importas.
        Vamos a hablar sobre cómo te sientes
    </h2>

    <div class="form-container">
        <form action="{{ route('registrarEmocion') }}" method="POST">
            @csrf

            <label for="emocion">¿Cuál es tu emoción en este momento?</label>
            <select name="emocion" required>
                <option value="" selected disabled>Selecciona una emoción</option>
                <option value="Nervioso">😬 Nervioso</option>
                <option value="Aburrido">😒 Aburrido</option>
                <option value="Travieso">😏 Travieso</option>
                <option value="Contento">😊 Contento</option>
                <option value="Miedoso">😱 Miedoso</option>
                <option value="Triste">😢 Triste</option>
                <option value="Shokeado">😲 Shokeado</option>
                <option value="Amado">🥰 Amado</option>
                <option value="Enojado">😡 Enojado</option>
            </select>

            <label for="intensidad">¿Tu emoción es fuerte o suave?</label>
            <select name="intensidad" required>
                <option value="" selected disabled>Selecciona la intensidad</option>
                <option value="Fuerte">Fuerte</option>
                <option value="Suave">Suave</option>
            </select>

            <label for="cuerpo">¿Dónde sientes la emoción en tu cuerpo?</label>
            <select name="cuerpo" required>
                <option value="" selected disabled>Selecciona donde sientes la emoción</option>
                <option value="En la cabeza">En la cabeza</option>
                <option value="En el pecho">En el pecho</option>
                <option value="En las manos">En las manos</option>
            </select>

            <label for="gusto">¿Esta emoción te gusta o no te gusta?</label>
            <select name="gusto" required>
                <option value="" selected disabled>Selecciona si te gusta o no</option>
                <option value="Me gusta">Me gusta</option>
                <option value="No me gusta">No me gusta</option>
                <option value="No estoy seguro">No estoy seguro</option>
            </select>

            <label for="paso">¿Algo pasó que te hizo sentir así?</label>
            <select name="paso" id="paso" onchange="mostrarPreguntasAdicionales()" required>
                <option value="" selected disabled>Selecciona si algo pasó</option>
                <option value="No">No</option>
                <option value="Sí">Sí</option>
            </select>

            <div id="preguntas-adicionales" class="hidden">
                <label for="razon">¿Fue por una persona, un lugar o algo que hiciste?</label>
                <select name="razon">
                    <option value="" selected disabled>Selecciona una razón</option>
                    <option value="Persona">Persona</option>
                    <option value="Lugar">Lugar</option>
                    <option value="Algo que hice">Algo que hice</option>
                </select>

                <label for="repeticion">¿Esto te ha pasado antes?</label>
                <select name="repeticion">
                    <option value="" selected disabled>Selecciona si te ha pasado antes</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                    <option value="No estoy seguro">No estoy seguro</option>
                </select>

            </div>

            <label for="cambiar">¿Quieres hacer algo para cambiar cómo te sientes?</label>
            <select name="cambiar" required>
                <option value="" selected disabled>Selecciona si quieres cambiar cómo te sientes</option>
                <option value="Sí">Sí</option>
                <option value="No">No</option>
                <option value="No sé">No sé</option>
            </select>

            <label for="ayuda">¿Qué te ayudaría en este momento?</label>
            <select name="ayuda" required>
                <option value="" selected disabled>Selecciona lo que te ayudaría</option>
                <option value="Un abrazo">🤗 Un abrazo</option>
                <option value="Escuchar música">🎵 Escuchar música</option>
                <option value="Estar solo">🧘 Estar solo</option>
                <option value="Hablar con alguien">🗣️ Hablar con alguien</option>
            </select>

            <label for="animal">Si tu emoción fuera un animal, ¿cuál sería?</label>
            <select name="animal" required>
                <option value="" selected disabled>Selecciona un animal</option>
                <option value="León">🦁 León (fuerte, dominante)</option>
                <option value="Tortuga">🐢 Tortuga (tranquilo, protegido)</option>
                <option value="Mariposa">🦋 Mariposa (cambio, delicadeza)</option>
                <option value="Lobo">🐺 Lobo (solitario, instintivo)</option>
                <option value="Pájaro">🐦 Pájaro (libre, ligero)</option>
                <option value="Serpiente">🐍 Serpiente (sigiloso, transformador)</option>
                <option value="Delfín">🐬 Delfín (alegre, sociable)</option>
                <option value="Elefante">🐘 Elefante (sabio, resiliente)</option>
            </select>

            <div style="margin-bottom: 20px;">
                <button type="submit" class="submit-button" id="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <div id="mensaje-container" class="footer-text" style="display: none;">
        <span>No hay respuestas correctas o incorrectas. Solo quiero saber cómo te sientes.</span>
        <img src="{{ asset('images/assets/flor.png')}}" alt="" width="280" height="280">
    </div>

    <script>
        function mostrarPreguntasAdicionales() {
            var paso = document.getElementById("paso").value;
            var preguntas = document.getElementById("preguntas-adicionales");
            if (paso === "Sí") {
                preguntas.classList.remove("hidden");
            } else {
                preguntas.classList.add("hidden");
            }
        }

        document.getElementById('paso').addEventListener('change', mostrarPreguntasAdicionales);

        document.getElementById('enviar').addEventListener('click', function(event) {
    event.preventDefault(); // Evita la recarga de la página

    let form = document.querySelector('form');
    let formData = new FormData(form);

    fetch("{{ route('registrarEmocion') }}", {
        method: "POST",
        body: formData,
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Ocultar botón de enviar
            document.getElementById('enviar').style.display = 'none';

            // Mostrar mensaje con imagen de la niña
            let mensajeContainer = document.getElementById('mensaje-container');
            mensajeContainer.style.display = 'flex';

            // Deshabilitar todos los campos del formulario para evitar cambios
            document.querySelectorAll('form select, form button').forEach(input => input.disabled = true);
        } else {
            // Mostrar alerta si ya se registró la emoción en el día
            alert(data.message);
        }
    })
    .catch(error => console.error("Error:", error));
});

    </script>

    @include('components.pagefoot')
</body>

</html>