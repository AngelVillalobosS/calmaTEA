@extends('components.navbar')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de emociones</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400&family=Lato:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #fdfdfd;
            color: #13432f;
            
        }
        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .motivational-text {
            font-size: 55px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        .image image{
            width: 150vh;
            
        }
        .calendar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid #13432f;
            padding: 10px;
            border-radius: 5px;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 10px;
        }
        .arrow {
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #13432f;
            padding: 5px;
            text-align: center;
            width: 30px;
        }
        th {
            background-color: #ddd;
        }
        .emotion {
            font-size: 18px;
            color: #13432f;
        }
    </style>
    <script>
        let currentMonth = new Date().getMonth(); // Mes actual
        let currentYear = new Date().getFullYear(); // Año actual
        let emociones = @json($emociones); // Pasamos las emociones al JavaScript

        function updateCalendar() {
            const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate(); // Total de días en el mes
            const firstDay = new Date(currentYear, currentMonth, 1).getDay(); // Día de la semana del 1er día del mes

            // Actualiza el encabezado del mes y año
            document.getElementById("month-year").textContent = `${months[currentMonth]} - ${currentYear}`;

            // Limpiar el calendario previo
            const calendarBody = document.getElementById("calendar-body");
            calendarBody.innerHTML = "";

            let day = 1;
            let totalCells = firstDay + daysInMonth; // Celdas totales (espacios vacíos + días del mes)
            let rows = Math.ceil(totalCells / 7); // Determinar el número correcto de filas

            for (let i = 0; i < rows; i++) {
                let row = "<tr>";
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        row += "<td></td>"; // Espacios vacíos antes del primer día del mes
                    } else if (day <= daysInMonth) {
                        // Buscar si hay una emoción en este día
                        const emotion = emociones.find(e => {
                            let fecha = new Date(e.fecha + "T00:00:00");
                            return fecha.getDate() === day && fecha.getMonth() === currentMonth && fecha.getFullYear() === currentYear;
                        });

                        row += `<td>${day}${emotion ? `<div class="emotion">${emotion.emoji}</div><div class="emotion">${emotion.emocion}</div>` : ''}</td>`;
                        day++;
                    } else {
                        row += "<td></td>"; // Espacios vacíos al final del mes
                    }
                }
                row += "</tr>";
                calendarBody.innerHTML += row;
            }
        }

        function prevMonth() {
            if (currentMonth === 0) {
                currentMonth = 11;
                currentYear--;
            } else {
                currentMonth--;
            }
            updateCalendar();
        }

        function nextMonth() {
            if (currentMonth === 11) {
                currentMonth = 0;
                currentYear++;
            } else {
                currentMonth++;
            }
            updateCalendar();
        }

        window.onload = updateCalendar;
    </script>
</head>
<body>
    <p class="motivational-text">¡Puedes seguir progresando, no te rindas!</p>
    <div class="container">
        <img src="{{ asset('images/assets/happy_support.avif')}}" alt="Dibujo motivacional" class="image">
        <div class="calendar-container">
            <div class="calendar-header">
                <span class="arrow" onclick="prevMonth()">&#9665;</span>
                <p id="month-year">Agosto - 2025</p>
                <span class="arrow" onclick="nextMonth()">&#9655;</span>
            </div>
            <table>
                <tr>
                    <th>Dom</th><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th>
                </tr>
                <tbody id="calendar-body">
                    <!-- El contenido del calendario se genera dinámicamente aquí -->
                </tbody>
            </table>
        </div>
    </div>
    @include('components.pagefoot')
</body>
</html>
@stop
