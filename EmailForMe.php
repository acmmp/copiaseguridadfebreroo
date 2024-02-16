<?php



// Establecer conexión a la base de datos (ajusta los datos según tu configuración)
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Guardar la contraseña de forma segura
    $fecha_reserva = $_POST['fecha_reserva'];
    $hora_entrada = $_POST['hora_entrada'];
    $num_comensales = $_POST['num_comensales'];
    $motivo = $_POST['motivo'];

    require "src/inc/validateForm.php";

    // Generar un ID aleatorio para id_usuario
    $id_usuario = uniqid();

    // Insertar datos en la tabla con la nueva columna id_usuario
    $sql = "INSERT INTO reservas (id_usuario, nombre, telefono, email, contraseña, fecha_reserva, hora_entrada, num_comensales, motivo) VALUES ('$id_usuario', '$nombre', '$telefono', '$email', '$contraseña', '$fecha_reserva', '$hora_entrada', '$num_comensales', '$motivo')";

    if ($conexion->query($sql) === TRUE) {

        require_once "src/inc/SendEmailForMe.php";

        if(sendEmailForMe($email, $nombre, $fecha_reserva,  $hora_entrada, $num_comensales)==true){

            // Redirigir a la página infopostreservapagina.php
            header("Location: infopostreservapagina.php");
            exit();
        }else{
            echo "Error al enviar el correo: " . $mail->ErrorInfo;
        }
    } else {
        echo "Error al guardar la reserva: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Maneja el caso en que el formulario no se envió correctamente
    echo "Error: El formulario no se envió correctamente.";
    exit();
}
?>
