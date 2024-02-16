

<?php
// Establecer la conexión a la base de datos
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");if ($conexion->connect_error);


// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Query para obtener las fechas de reserva, horas de entrada y nombres desde la base de datos
$query = "SELECT fecha_reserva, hora_entrada, nombre FROM reservas";
$resultado = $conexion->query($query);

// Array para almacenar los eventos
$eventos = array();

// Procesar los resultados y formatearlos para FullCalendar
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        // Combina la fecha y hora en el formato esperado por FullCalendar
        $fecha_reserva = new DateTime($row["fecha_reserva"] . ' ' . $row["hora_entrada"]);
        $fecha_formateada = $fecha_reserva->format('Y-m-d\TH:i:s');

        // Crea el evento con la fecha y hora formateadas y el nombre de la persona
        $evento = array(
            "title" => "Reserva - " . $row["nombre"],
            "start" => $fecha_formateada
            // Puedes añadir más propiedades si es necesario
        );
        array_push($eventos, $evento);
    }
}

// Convertir el array de eventos a formato JSON
echo json_encode($eventos);

// Cerrar la conexión a la base de datos
$conexion->close();
?>

