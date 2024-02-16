<?php
$mensaje_cliente = <<<EOHTML
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmación de Reserva</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
        background-image: url('https://www.restaurantekutral.com/wp-content/uploads/2021/04/DSC08802-1024x1024.jpg');
    }

    header {
        background-color: #FFDC00;
        color: white;
        text-align: center;
        padding: 20px;
    }

    section {
        margin: 20px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px;
    }
</style>
</head>
<body>

    <header>
        <h1>SOLICITUD DE RESERVA RECIBIDA</h1>
    </header>

    <section>
        <h2>Hola $nombre, se ha recibido correctamente tu solicitud de reserva</h2>
        <p>Te adjuntamos un resumen de tu reserva actual:</p>
        <ul>
            <li>Nombre: $nombre</li>
            <li>Email: $email</li>
            <li>Fecha Reserva: $fecha_reserva</li>
            <li>Hora de entrada: $hora_entrada</li>
            <li>Número de comensales: $num_comensales</li>
        </ul>
        
        <!-- Image in the section -->
        <img src="https://www.restaurantekutral.com/wp-content/uploads/2021/04/DSC08802-1024x1024.jpg" alt="Background Image">
        <p>En cuanto tu reserva sea aceptada por nuestro restaurante, se te enviará un nuevo correo electrónico.</p>
    </section>

    <footer>
        <p>&copy; 2024 Kutral</p>
    </footer>

</body>
</html>
EOHTML;


?>