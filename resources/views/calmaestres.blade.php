@extends('components.navbar')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrategias de relajación</title>
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
            text-align: justify;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 300;
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
        .strategy {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin: 20px auto;
            max-width: 700px;
            text-align: left;
        }
        .strategy-icon {
            font-size: 24px;
        }
        .strategy-text {
            flex: 1;
        }
        .strategy-text h3 {
            margin: 0;
            font-size: 27px;
            color: #014235;
        }
        .strategy-text p {
            margin: 5px 0;
            font-size: 27px;
            color: #333;
            text-align: justify;
        }
        .breathing-container {
            text-align: center;
            margin-top: 20px;
        }
        .breathing-button {
            font-size: 17px;
            font-weight: 400;
            color: #014235;
            border: 2px solid #014235;
            background-color: transparent;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s, color 0.3s;
        }
        .breathing-button:hover {
            background-color: #014235;
            color: white;
        }
       /* Estilos del modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #014235;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            position: relative;
            width: 60%;
            max-width: 700px;
        }

        .close {
            
            position: absolute;
            top: -40px;  /* Mueve la "X" más arriba del modal */
    right: -40px; /* Mueve la "X" más a la derecha del modal */
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        video {
            width: 100%;
            border-radius: 8px;
        }

        .footer {
            background-color: #5dc5dd;
            padding: 15px;
            text-align: center;
            color: white;
            width: 100%;
            margin-top: 40px;
        }
        .video-options .breathing-button {
    color: black !important;
    background-color: white !important;
    border: 2px solid black !important;
    transition: background-color 0.3s, color 0.3s;
}

.video-options .breathing-button:hover {
    background-color: black !important;
    color: white !important;
}
.back-btn-container {
    position: absolute;  /* Hace que la flecha esté fuera del flujo normal */
    top: 250px;  /* Ajusta la distancia desde la parte superior de la página */
    left: 250px;  /* Ajusta la distancia desde el borde izquierdo */
    z-index: 10;  /* Asegura que la flecha esté por encima de otros elementos si es necesario */
}



.back-arrow {
    width: 120px; /* Ajusta el tamaño de la flecha */
    height: auto; /* Mantén la proporción de la imagen */
}


    </style>
</head>
<body>
    
<div class="back-btn-container">
    <a href="{{ route('selecEmociones') }}" class="back-button">
        <img src="{{ asset('images/assets/flecha.png')}}" alt="Regresar" class="back-arrow">
    </a>
</div>


    <h2>Estrategias para calmarte cuando estés nervioso o ansioso</h2>
    <div class="strategy">
        <div class="strategy-icon">🫁</div>
        <div class="strategy-text">
            <h3>Ejercicio de respiración</h3>
            <p>Inhala profundamente por la nariz, cuenta hasta 4 y exhala lentamente por la boca. Repite varias veces.</p>
        </div>
    </div>
    <div class="breathing-container">
        <button class="breathing-button" onclick="openModal()">
            Iniciar guía de respiración →
        </button>
    </div>
    <div id="breathingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3 style="color: white;">Elige un método de respiración</h3>

        <!-- Lista de opciones de videos -->
        <div class="video-options">
            <button class="breathing-button" onclick="changeVideo('{{ asset('files/ejerciciorespiracion.mp4') }}')">
                Respiración profunda
            </button>
            <button class="breathing-button" onclick="changeVideo('{{ asset('files/ejerciciosrespiracion1.mp4') }}')">
                Técnica 4-7-8
            </button>
            <button class="breathing-button" onclick="changeVideo('{{ asset('files/ejerciciosrespiracion2.mp4') }}')">
                Respiración diafragmática
            </button>
        </div>

        <!-- Reproductor de video -->
        <video id="breathingVideo" controls>
            <source id="videoSource" src="{{ asset('files/ejerciciorespiracion1.mp4') }}" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">🤲</div>
        <div class="strategy-text">
            <h3>Presiona un objeto calmante</h3>
            <p>Agarra una pelota antiestrés, un peluche o un objeto con textura agradable y apriétalo suavemente varias veces.</p>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">🎧</div>
        <div class="strategy-text">
            <h3>Escucha sonidos relajantes</h3>
            <p>Pon música tranquila, sonidos de la naturaleza o una melodía que te haga sentir bien.</p>
        </div>
    </div>
    <div class="breathing-container">
        <button class="breathing-button" onclick="openMusicModal()">
            Reproducir sonidos relajantes →
        </button>
        
    </div>
    <div id="musicModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeMusicModal()">&times;</span>
            <h3 style="color: white;">Elige un la musica que mas te guste</h3>

            <!-- Lista de opciones de videos -->
            <div class="video-options">
                <button class="breathing-button" onclick="changeMusic('{{ asset('files/relaxvideo.mp4') }}')">
                    Musica relajante 1
                </button>
                <button class="breathing-button" onclick="changeMusic('{{ asset('files/relaxvideo2.mp4') }}')">
                    Musica relajante 2
                </button>
                <button class="breathing-button" onclick="changeMusic('{{ asset('files/relaxvideo3.mp4') }}')">
                    Musica relajante 1
                </button>
            </div>
            <!-- Reproductor de video -->
        <video id="musicVideo" controls>
            <source id="videoSource" src="{{ asset('files/ejerciciorespiracion1.mp4') }}" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">🚶‍♂️</div>
        <div class="strategy-text">
            <h3>Cambia de espacio por un momento</h3>
            <p>Si puedes, levántate y camina un poco. A veces moverte te ayuda a reducir la ansiedad.</p>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">✍️</div>
        <div class="strategy-text">
            <h3>Escribe o dibuja lo que sientes</h3>
            <p>Si las palabras no salen, intenta hacer un dibujo o escribir en un cuaderno cómo te sientes en este momento.</p>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">💆</div>
        <div class="strategy-text">
            <h3>Haz presión suave en las palmas de tus manos o en los hombros</h3>
            <p>Presiona suavemente tus manos o tus hombros y suelta poco a poco. Esto puede ayudar a liberar tensión.</p>
        </div>
    </div>
    <div class="strategy">
        <div class="strategy-icon">🧩</div>
        <div class="strategy-text">
            <h3>Haz una actividad repetitiva o estructurada</h3>
            <p>Ordenar cosas, hacer un rompecabezas o armar algo pequeño puede ayudarte a calmarte.</p>
        </div>
    </div>
    
    <script>
        function openModal() {
            document.getElementById("breathingModal").style.display = "flex";
        }
    
        function closeModal() {
            document.getElementById("breathingModal").style.display = "none";
            document.getElementById("breathingVideo").pause();
        }
    
        function openMusicModal() {
            document.getElementById("musicModal").style.display = "flex";
        }
    
        function closeMusicModal() {
            document.getElementById("musicModal").style.display = "none";
            document.getElementById("musicVideo").pause();
        }
        function changeVideo(videoSrc) {
        let videoElement = document.getElementById("breathingVideo");
        let sourceElement = document.getElementById("videoSource");
        sourceElement.src = videoSrc;
        videoElement.load();  // Recargar el video con la nueva fuente
        videoElement.play();  // Reproducir automáticamente el nuevo video
        }

        function changeMusic(videoSrc) {
            let videoElement = document.getElementById("musicVideo");
            let sourceElement = videoElement.getElementsByTagName("source")[0];
            sourceElement.src = videoSrc;
            videoElement.load();  // Recargar el video con la nueva fuente
            videoElement.play();  // Reproducir automáticamente el nuevo video
        }


    </script>
    @include('components.pagefoot')
</body>
</html>
@stop