<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <title>Restaurante</title>
    <style>
        /* Estilos para el contenedor del calendario */
        #calendar {
            width: 80%; /* Ajusta el ancho según tus necesidades */
            margin: 0 auto; /* Centra el calendario horizontalmente */
            padding-top: 20px; /* Añade un espacio superior */
            max-width: 1500px; /* Define el ancho máximo */
        }
    </style>
</head>
<body>
<?php require("headadmin.php"); ?>

<div id='calendar'></div>

<?php require("footer.php"); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: {
                url: 'eventos.php', // URL para obtener eventos desde la base de datos
                method: 'POST'
            }
        });
        calendar.render();
    });
</script>
<script src="menu.js"></script>
</body>
</html>
