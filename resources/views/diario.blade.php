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
            text-align: center;
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
        select, button {
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

    </style>
</head>
<body>
    
    <h2>
        <img src="{{ asset('images/assets/sobre.png')}}" alt="" width="273" height="273"> 
        Tu importas.
        Vamos a hablar sobre cómo te sientes
    </h2>
    
    <div class="form-container">
        <form>
            <label for="intensidad">¿Tu emoción es fuerte o suave?</label>
            <select id="intensidad">
                <option>Fuerte</option>
                <option>Suave</option>
            </select>
            
            <label for="cuerpo">¿Dónde sientes la emoción en tu cuerpo?</label>
            <select id="cuerpo">
                <option>En la cabeza</option>
                <option>En el pecho</option>
                <option>En las manos</option>
            </select>
            
            <label for="gusto">¿Esta emoción te gusta o no te gusta?</label>
            <select id="gusto">
                <option>Me gusta</option>
                <option>No me gusta</option>
                <option>No estoy seguro</option>
            </select>
            
            <label for="paso">¿Algo pasó que te hizo sentir así?</label>
            <select id="paso" onchange="mostrarPreguntasAdicionales()">
                <option>No</option>
                <option>Sí</option>
            </select>
            
            <div id="preguntas-adicionales" class="hidden">
                <label for="razon">¿Fue por una persona, un lugar o algo que hiciste?</label>
                <select id="razon">
                    <option>Persona</option>
                    <option>Lugar</option>
                    <option>Algo que hice</option>
                </select>
                
                <label for="repeticion">¿Esto te ha pasado antes?</label>
                <select id="repeticion">
                    <option>Sí</option>
                    <option>No</option>
                    <option>No estoy seguro</option>
                </select>
            </div>
            
            <label for="cambiar">¿Quieres hacer algo para cambiar cómo te sientes?</label>
            <select id="cambiar">
                <option>Sí</option>
                <option>No</option>
                <option>No sé</option>
            </select>
            
            <label for="ayuda">¿Qué te ayudaría en este momento?</label>
            <select id="ayuda">
                <option>🤗 Un abrazo</option>
                <option>🎵 Escuchar música</option>
                <option>🧘 Estar solo</option>
                <option>🗣️ Hablar con alguien</option>
            </select>
            
            <label for="necesitas-ayuda">¿Necesitas ayuda de alguien para sentirte mejor?</label>
            <select id="necesitas-ayuda">
                <option>Sí</option>
                <option>No</option>
                <option>No estoy seguro</option>
            </select>
            
            <label for="animal">Si tu emoción fuera un animal, ¿cuál sería?</label>
            <select id="animal">
                <option>🦁 León (fuerte, dominante)</option>
                <option>🐢 Tortuga (tranquilo, protegido)</option>
                <option>🦋 Mariposa (cambio, delicadeza)</option>
                <option>🐺 Lobo (solitario, instintivo)</option>
                <option>🐦 Pájaro (libre, ligero)</option>
                <option>🐍 Serpiente (sigiloso, transformador)</option>
                <option>🐬 Delfín (alegre, sociable)</option>
                <option>🐘 Elefante (sabio, resiliente)</option>
            </select>

            <button type="submit" class="submit-button">Enviar</button>
        </form>
    </div>
    
    <div class="footer-text">
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
    </script>
</body>
</html>
