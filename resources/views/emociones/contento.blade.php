@include('components.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me siento contento</title>
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
    .content-box h3{
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
</style>

</head>

<body>
<div class="container-custom">
    <div class="content-box">
    <div class="back-button-container2">
            <a href="{{ route('selecEmociones') }}" class="back-button">
                <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" width="70">
            </a>
        </div>
        
        <div class="text-with-image-left">
            <img src="{{ asset('images/assets/niña-feliz.png') }}" alt="Niña feliz" width="250">
            <h2>"¡Qué bien que te sientas contento!<br>Es un gran día para disfrutar."</h2>
        </div>

        <h3>Puedes realizar lo siguiente:</h3>

        <div class="exercise-list">
            <div class="text-with-image">
                <p>1. Haz algo positivo por los demás:<br> Sorprende a alguien con una sonrisa, un mensaje o un pequeño gesto amable.</p>
                <img src="{{ asset('images/assets/gato-perro.png') }}" alt="Gato y perro felices">
                
                <p>2. Escribe o comparte lo que te hace feliz:<br> Escribe tres cosas que te hacen sonreír o cuenta algo divertido que te haya pasado hoy.</p>
                <img src="{{ asset('images/assets/escribir-feliz.png') }}" alt="Escribir felicidad">
                
                <p>3. Disfruta del momento:<br> Tómate un momento para respirar profundamente y sentir gratitud por lo que te hace feliz.</p>
                <img src="{{ asset('images/assets/musica-feliz.png') }}" alt="Escuchar música feliz">
            </div>
            <div class="form-container">
                <p>¿Quieres escribir cómo te sientes ahora?</p>
                <input type="text" id="sentir"  required>

                <button type="button" class="submit-button" id="enviar">Enviar</button>
            </div>
        </div>

        <div id="mensaje-container" style="display: none;">
            <div class="text-with-image-left">
                <h3 class="mt-4">La felicidad es contagiosa, ¡sigue compartiendo esa energía positiva! Que tu día siga lleno de sonrisas..</h3>
                <img src="{{ asset('images/assets/niña-despedida-feliz.png') }}" alt="Niña despidiéndose amorosa" width="250">
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

        document.getElementById('mensaje-container').style.display = 'block';

        document.getElementById('sentir').value = '';

        this.style.display = 'none';
    });
</script>

@include('components.pagefoot')
</body>

</html>