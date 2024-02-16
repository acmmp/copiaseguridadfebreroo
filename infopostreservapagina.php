<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Agregamos SweetAlert2 -->
    <title>Restaurante</title>
</head>
<body>
<?php require("head.php"); ?>

<main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Su reserva ha sido realizada con éxito</h2>
            <ul class="fondo">
                <li>
                    <strong>Estado reserva:</strong> "PENDIENTE"
                    <br><br>
                    <p>
                        <strong>En su Email le dejamos un borrador con la información de la reserva, se le avisará por correo electrónico cuando su reserva sea aceptada por nuestro restaurante</strong>
                    </p>
                    <p>
                        <strong>¡Gracias por confiar en kutral!</strong> Contacto: 654 453 345
                    </p>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php require("footer.php"); ?>

<!-- Script para mostrar la alerta -->
<script>
    // Invocamos SweetAlert2 para mostrar la alerta
    Swal.fire({
        title: "¡Reserva Realizada!",
        text: "¡Espera a que su reserva sea confirmada!",
        icon: "success"
    });
</script>

</body>
</html>
