
<?php
session_start();
// Establece la conexión a la base de datos
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");if ($conexion->connect_error);

// Verifica si se ha recibido un ID válido para la reserva a eliminar
if (isset($_POST['id']) && !empty($_POST['id'])) {
    // Obtén el ID de la reserva a eliminar
    $id_reserva = $_POST['id'];

    // Consulta SQL para eliminar la reserva
    $sql_eliminar = "DELETE FROM reservas WHERE id = $id_reserva";

    // Ejecutar la consulta
    if ($conexion->query($sql_eliminar) === TRUE) {
        // La reserva se eliminó correctamente
        echo json_encode(array("success" => true));
    } else {
        // Error al eliminar la reserva
        echo json_encode(array("success" => false, "message" => "Error al eliminar la reserva"));
    }
} else {
    // ID de reserva no válido
    echo json_encode(array("success" => false, "message" => "ID de reserva no válido"));
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
