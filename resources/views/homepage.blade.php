@include('components.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            animation: fadeInUp 1s ease-out;
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: auto;
            text-align: center;
            padding: 40px;
        }

        .container h2, .container p, .content h3, .content p, .button-section p, .quote-section p {
            animation: fadeInUp 1s ease-out;
        }

        .container h2 {
            font-family: 'Fraunces', serif;
            font-size: 55px;
            color: #014235;
            max-width: 800px;
            margin: 20px auto;
        }

        .container p {
            font-size: 38px;
            color: #000;
            text-align: justify;
            max-width: 80%;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 90%;
            margin-top: 60px;
            gap: 60px;
        }

        .content-text {
            flex: 1;
            text-align: left;
            max-width: 500px;
            margin-left: 50px;
        }

        .content h3 {
            font-size: 55px;
            color: #014235;
            font-family: 'Fraunces', serif;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 41px;
            color: #000;
            text-align: left;
            max-width: 500px;
        }

        .illustration {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .illustration img {
            width: 350px;
            height: auto;
        }

        .button-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .button-section p {
            font-size: 40px;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            color: #000;
            margin-bottom: 10px;
        }

        .arrow {
            font-size: 30px;
            color: #014235;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 20px;
            color: #014235;
            text-decoration: none;
            border: 2px solid #014235;
            border-radius: 5px;
            animation: fadeInUp 1s ease-out;
        }

        .quote-section {
            width: 1258px;
            height: 399px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
            margin: 0 auto;
        }

        .quote-section img {
            width: 150px;
            height: auto;
        }

        .quote-section p {
            font-size: 55px;
            font-family: 'Fraunces', serif;
            color: #014235;
            margin-top: 10px;
        }

        .footer {
            background-color: #5dc5dd;
            padding: 15px;
            text-align: center;
            color: white;
            width: 100%;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>¡Bienvenido a CalmaTea!</h2>
        @if(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
@endif
        <p>
            CalmaTea es un espacio seguro para entender y manejar tus emociones de forma sencilla.
            Aquí encontrarás herramientas, consejos y actividades para expresarte, relajarte y sentirte mejor.
        </p>
    </div>
    <div class="content">
        <div class="content-text">
            <h3>¿Qué es CalmaTea?</h3>
            <p>
                CalmaTea te ayuda a identificar, expresar y gestionar tus emociones con técnicas, consejos y actividades.
            </p>
        </div>
        <div class="illustration">
            <img src="{{asset('images/assets/ninaflor.png')}}" alt="Ilustración de niña">
        </div>
        <div class="button-section">
            <p>Descubre herramientas para gestionar tus emociones a tu ritmo.</p>
            <div class="arrow">⬇</div>
            <div class="button-container">
                <a href="{{route('selecEmociones')}}">¡Empieza ahora!</a>
            </div>
        </div>
    </div>
    <div class="quote-section">
        <img src="{{asset('images/assets/calma.jpg')}}" alt="Ícono decorativo">
        <p>"La vida está hecha por la mente, y somos lo que pensamos."</p>
    </div>
@include('components.pagefoot')
</body>
</html>
