@include('components.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me siento miedoso</title>
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

        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            max-width: 400px;
            height: 100%;
        }

        .form-container label,
        .form-container input,
        .form-container button {
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

        .container-custom {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 50px 10%;
        }

        .content-box {
            padding: 1.3rem;
            max-width: 700px;
            text-align: justify;
        }

        .content-box h2 {
            float: right;
            color: #014235;
            font-family: 'Fraunces';
            font-size: 2.4rem;
        }

        .content-box h3 {
            padding-top: 1rem;
            font-family: 'Fraunces';
            color: #014235;
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

        .back-btn-container {
            position: absolute;
            /* Hace que la flecha esté fuera del flujo normal */
            top: 250px;
            /* Ajusta la distancia desde la parte superior de la página */
            left: 250px;
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
    <div class="container-custom">
        <div class="content-box">
            <div class="back-btn-container">
                <a href="{{ route('selecEmociones') }}" class="back-button">
                    <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" class="back-arrow">
                </a>
            </div>

            <div class="text-with-image-left">
                <img src="{{ asset('images/assets/niña-miedo.png') }}" alt="Niña asustada" width="250">
                <h2>Parece que algo te ha asustado. ¡Es completamente normal sentirse así a veces! Vamos a calmar esa sensación.</h2>
            </div>

            <h3>Puedes realizar lo siguiente:</h3>

            <div class="exercise-list">
                <p>1. Mira a tu alrededor y observa con calma<br>A veces, el miedo se apaga cuando vemos que todo está en su lugar.</p>
                <div class="text-with-image">
                    <img src="{{ asset('images/assets/observar2.png') }}" alt="Observar">
                </div>

                <p>2. Bebe agua o una bebida caliente<br>Una bebida reconfortante puede ayudar a sentirte más tranquilo.</p>
                <div class="text-with-image">
                    <img src="{{ asset('images/assets/beber.png') }}" alt="Beber agua">
                </div>

                <p>3. Lee algo positivo o reconfortante<br>Una historia corta o una cita inspiradora pueden ayudarte.</p>
                <div class="text-with-image">
                    <img src="{{ asset('images/assets/leer2.png') }}" alt="Leer">
                </div>

                <div class="form-container">
                    <p>¿Quieres escribir cómo te sientes ahora?</p>
                    <input type="text" id="sentir" required>

                    <button type="button" class="submit-button" id="enviar">Enviar</button>
                </div>
            </div>

            <div id="mensaje-container" style="display: none;">
                <div class="text-with-image-left">
                    <h3 class="mt-4">Recuerda, el miedo es solo una emoción momentánea. Tómate tu tiempo y pronto te sentirás más tranquilo.</h3>
                    <img src="{{ asset('images/assets/niña-despedida3.png') }}" alt="Niña despidiéndose" width="250">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('enviar').addEventListener('click', function() {
            const sentirTexto = document.getElementById('sentir').value;

            if (sentirTexto.trim() === '') {
                alert('Por favor, escribe cómo te sientes antes de enviar.');
                return;
            }

            // Mostrar el mensaje de éxito
            document.getElementById('mensaje-container').style.display = 'block';

            document.getElementById('sentir').disabled = true; // Deshabilitar el campo de texto
            this.style.display = 'none'; // Ocultar el botón de enviar

            document.querySelector('.form-container input').style.display = 'none'; 
        });
    </script>

    @include('components.pagefoot')
</body>

</html>