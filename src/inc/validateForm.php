<?php
// Validación de número de comensales
    if ($_POST['num_comensales'] > 10) {
        echo "El número de comensales no puede ser mayor que 10.";
        // Puedes redirigir al usuario de vuelta al formulario u otra acción según tus necesidades.
        exit();
    }

    // Validación de formato de correo electrónico
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo electrónico no es válido.";
        exit();
    }

    // Validación de número de teléfono
    if (strlen($_POST['telefono']) !== 9 || !ctype_digit($_POST['telefono'])) {
        echo "El número de teléfono debe tener 9 dígitos.";
        exit();
    }

    // Validación de fecha
    $fecha_actual = date('Y-m-d');
    if ($_POST['fecha_reserva'] < $fecha_actual || $_POST['fecha_reserva'] > '2024-12-31') {
        echo "La fecha de reserva no es válida.";
        exit();
    }

    // Validación de horario de funcionamiento
    $hora_entrada = $_POST['hora_entrada'];
    if ($hora_entrada < '13:00' || $hora_entrada > '24:00') {
        echo "El establecimiento no está abierto a la hora seleccionada.";
        exit();
    }

    // Validación de límite de caracteres para el motivo
    if (strlen($_POST['motivo']) > 1000) {
        echo "El motivo no puede exceder los 1000 caracteres.";
        exit();
    }

    ?>