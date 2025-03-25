@extends('components.navbar')
@section('contenido')
    <title>Tabla de emociones</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #fdfdfd;
            color: #13432f;
        }

        .main-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .motivational-text {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }

        .image {
            width: 150px;
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

        th,
        td {
            border: 1px solid #13432f;
            padding: 5px;
            text-align: center;
            width: 30px;
        }

        th {
            background-color: #ddd;
        }
    </style>
    <script>
        let currentMonth = 7; // Agosto (0-based index)
        let currentYear = 2016;

        function updateCalendar() {
            const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            document.getElementById("month-year").textContent = `${months[currentMonth]} - ${currentYear}`;
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
    <p class="motivational-text">Puedes seguir progresando, ¡No de rindas!</p>
    <div class="main-container">
        <img src="{{ asset('images/assets/happy_support.avif')}}" alt="Dibujo motivacional" class="image">
        <div class="calendar-container">
            <div class="calendar-header">
                <span class="arrow" onclick="prevMonth()">&#9665;</span>
                <p id="month-year">AGOSTO - 2016</p>
                <span class="arrow" onclick="nextMonth()">&#9655;</span>
            </div>
            <table>
                <tr>
                    <th>Dom</th>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mié</th>
                    <th>Jue</th>
                    <th>Vie</th>
                    <th>Sáb</th>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@stop