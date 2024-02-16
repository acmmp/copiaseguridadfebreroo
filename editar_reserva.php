<?php
// Verifica si se ha enviado un ID válido a través de la URL
if (isset($_GET['id'])) {
    $id_reserva = $_GET['id'];

    // Establece la conexión a la base de datos
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Aquí puedes realizar la lógica para cargar los datos de la reserva con el ID proporcionado
    $sql = "SELECT * FROM reservas WHERE id = $id_reserva";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $telefono = $row['telefono'];
        $email = $row['email'];
        $hora_reserva = $row['hora_entrada'];
        $num_comensales = $row['num_comensales'];
        $estado_reserva = $row['estado_reserva'];
    } else {
        // Si no se encontró la reserva, redirige a la página de administrador
        header("Location: reservasclientes.php");
        exit();
    }

    // Si se envió un formulario de edición
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Actualiza los datos en la base de datos con los valores del formulario
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $hora_reserva = $_POST['hora_reserva'];
        $num_comensales = $_POST['num_comensales'];
        $estado_reserva = $_POST['estado_reserva'];

        $sql_update = "UPDATE reservas SET nombre='$nombre', telefono='$telefono', email='$email', 
                       hora_entrada='$hora_reserva', num_comensales=$num_comensales, estado_reserva='$estado_reserva' 
                       WHERE id=$id_reserva";

        if ($conexion->query($sql_update) === TRUE) {
            // Después de la actualización, redirige a la página de administrador
            header("Location: reservasclientes.php");
            exit();
        } else {
            echo "Error al actualizar la reserva: " . $conexion->error;
        }
    }

    // Cierra la conexión
    $conexion->close();
} else {
    // Si no se proporcionó un ID válido, redirige a la página de administrador
    header("Location: reservasclientes.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <!-- Formulario de edición -->
    <form method="post" action="">
        <!-- Campos para la edición de la reserva -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="hora_reserva">Hora de la reserva:</label>
        <input type="text" id="hora_reserva" name="hora_reserva" value="<?php echo $hora_reserva; ?>" required>

        <label for="num_comensales">Número de comensales:</label>
        <input type="number" id="num_comensales" name="num_comensales" value="<?php echo $num_comensales; ?>" required>

        <label for="estado_reserva">Estado reserva:</label>
        <select id="estado_reserva" name="estado_reserva" required>
            <option value="Pendiente" <?php if ($estado_reserva == 'Pendiente') echo 'selected'; ?>>Pendiente</option>
            <option value="Confirmada" <?php if ($estado_reserva == 'Confirmada') echo 'selected'; ?>>Confirmada</option>
            <option value="Cancelada" <?php if ($estado_reserva == 'Cancelada') echo 'selected'; ?>>Cancelada</option>
        </select>

        <!-- Botón de guardar cambios -->
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
