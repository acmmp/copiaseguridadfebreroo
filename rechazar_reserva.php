<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

// Establece la conexión a la base de datos
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");// Verifica si se ha pasado el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    $id_reserva = $_GET['id'];

    // Actualiza el estado de la reserva a 'rechazada' en la base de datos
    $sql_actualizar = "UPDATE reservas SET estado_reserva = 'Cancelada' WHERE id = $id_reserva";
    $resultado_actualizar = $conexion->query($sql_actualizar);

    if ($resultado_actualizar) {
 
        // Redirige de nuevo a la página de administrador después de la actualización
        $email=$_GET['email'];
        require_once "src/inc/SendEmailRech.php";


        // echo "$email";
        //exit;



        header("Location: reservasclientes.php");
        exit();
    } else {
        // Manejar errores si la actualización falla
        echo "Error al actualizar la reserva: " . $conexion->error;
    }
} else {
    // Manejar el caso en el que no se proporciona el parámetro 'id'
    echo "ID de reserva no proporcionado.";
}

// Cierra la conexión
$conexion->close();
?>
