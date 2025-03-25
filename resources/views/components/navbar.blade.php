<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/assets/calmatea_logo.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .container-custom {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
            background-color: #ffffff;
        }

        .back-button-container {
            display: flex;
            justify-content: flex-start;
            width: 70%;
        }

        .text-with-image-left {
            display: flex;
            align-items: center;
            text-align: left;
            gap: 10px;
        }

        .text-with-image-right {
            display: flex;
            align-items: center;
            text-align: right;
            gap: 10px;
            flex-direction: row-reverse;
        }

        .form-container {
            max-width: 400px;
        }

        .image-container img {
            max-width: 350px;
        }

        .text-with-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .navbar-custom {
            background-color: #F4EBD7;
            padding: 15px 10%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .menu-button {
            border: none;
            background: none;
            font-size: 24px;
            cursor: pointer;
        }

        .menu-dropdown {
            display: none;
            /* Oculto por defecto */
            position: fixed;
            /* Fijo en la pantalla */
            top: 0;
            right: 0;
            background: white;
            border-left: 1px solid #ccc;
            padding: 1rem;
            width: min(22.5rem, 100%);
            /* Máximo 360px, pero se adapta */
            height: 100vh;
            /* Ocupa toda la altura de la pantalla */
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            /* Sombra lateral */
            overflow-y: auto;
            /* Permite scroll si hay muchos elementos */
            transition: transform 0.3s ease-in-out;
            transform: translateX(100%);
            /* Inicialmente oculto fuera de la pantalla */
            z-index: 1000;
            /* Asegura que esté sobre otros elementos */
        }

        .menu-dropdown.show {
            transform: translateX(0);
            /* Muestra el menú */
        }


        .menu-dropdown ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-dropdown ul li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .menu-dropdown ul li:last-child {
            border-bottom: none;
        }

        .menu-dropdown a {
            text-decoration: none;
            color: black;
            display: block;
        }

        .sendhome {
            color: #014235;
            text-decoration: underline;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            text-align: left;
        }

        .footer {
            background-color: #54c2d0;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar-custom">
        <div style="display: flex; align-items: center; gap: 10px;">
            <img src="{{ asset('images/assets/calmatea_logo.png') }}" width=150 height=150 alt="Logo">
            <div style="display: flex; flex-direction: column;">
                <span><a href="{{route('hpView')}}" class="sendhome">CalmaTea</a></span>
                <span>"Equilibra tus emociones, encuentra tu calma"</span>
            </div>
        </div>

        <div class="menu-container">
            <button class="menu-button">&#9776;</button>
            <div class="menu-dropdown">
                <ul>
                    <li><a href="{{ route('hpView')}}">Inicio</a></li>
                    <li><a href="{{route('calmaestres')}}">Calma tu estrés, Entra aquí</a></li>
                    <li><a href="{{route('selecEmociones')}}">Registra una emoción</a></li>
                    <li><a href="{{route('diario')}}">Diario</a></li>
                    <li><a href="#">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector(".menu-button");
            const menuDropdown = document.querySelector(".menu-dropdown");

            // Alternar visibilidad del menú cuando se hace clic en el botón
            menuButton.addEventListener("click", function(event) {
                event.stopPropagation(); // Evita que el evento se propague al document
                menuDropdown.style.display = menuDropdown.style.display === "block" ? "none" : "block";
            });

            // Cerrar el menú cuando se hace clic fuera de él
            document.addEventListener("click", function(event) {
                if (!menuDropdown.contains(event.target) && !menuButton.contains(event.target)) {
                    menuDropdown.style.display = "none";
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector(".menu-button");
            const menuDropdown = document.querySelector(".menu-dropdown");

            menuButton.addEventListener("click", function(event) {
                event.stopPropagation();
                menuDropdown.classList.toggle("show");
            });

            document.addEventListener("click", function(event) {
                if (!menuDropdown.contains(event.target) && !menuButton.contains(event.target)) {
                    menuDropdown.classList.remove("show");
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@yield('contenido')
</html>