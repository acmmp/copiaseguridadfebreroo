<?php
session_start(); // Ensure session is started at the top of the script

// Verify if the user is logged in
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Establish database connection
$conexion = new mysqli("kutral.es.mysql", "kutral_es", "ProyectoKUTRAL1#", "kutral_es");

// Query to get reservations for the current user
$id_usuario = $_SESSION['id_usuario'];
$sql_reservas = "SELECT * FROM reservas WHERE id_usuario = '$id_usuario'";
$result_reservas = $conexion->query($sql_reservas);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">
    <title>Restaurante</title>
</head>

<body>
    <?php require("head_userregistrados.php"); ?>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Información de Reservas</h2>
                <ul class="fondo">
                    <?php
                    // Display user reservations
                    while ($row_reserva = $result_reservas->fetch_assoc()) {
                        echo "<li>";
                        echo "<strong>Nombre:</strong> " . $row_reserva['nombre'] . "<br>";
                        echo "<strong>Teléfono:</strong> " . $row_reserva['telefono'] . "<br>";
                        echo "<strong>Email:</strong> " . $row_reserva['email'] . "<br>";
                        echo "<strong>Hora de la reserva:</strong> " . $row_reserva['hora_entrada'] . "<br>";
                        echo "<strong>Número de comensales:</strong> " . $row_reserva['num_comensales'] . "<br>";
                        echo "<strong>Estado reserva:</strong> " . $row_reserva['estado_reserva'] . "<br>";
                        echo "</li>";
                    }

                    // Close the database connection
                    $conexion->close();
                    ?>
                </ul>
            </div>
        </section>
    </main>

    <?php require("footer.php"); ?>
</body>

</html>
