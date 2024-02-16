<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservas.css">
                                                                          <script>
                                                                            // Función para validar que los correos electrónicos coincidan
                                                                            function validarEmails() {
                                                                                var email = document.getElementById("email").value;
                                                                                var repetirEmail = document.getElementById("repetir_email").value;
                                                                     
                                                                                if (email !== repetirEmail) {
                                                                                    alert("Los correos electrónicos no coinciden.");
                                                                                    return false; // Detiene el envío del formulario si los correos electrónicos no coinciden
                                                                                }
                                                                                return true; // Permite el envío del formulario si los correos electrónicos coinciden
                                                                            }
                                                                        </script>
 
 
 
    <title>Document</title>
</head>
<body>
<?php require("headadmin.php"); ?>
 
 
<br>
<br>
 
 
<h2> <strong> Formulario de Reserva  </strong></h2>
 
<div class="centrar-formulario">
<form action="procesar_formulario.php" method="post">
    <!-- Campo Nombre -->
     <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" minlength="3" maxlength="25" required>
 
    <!-- Campo Teléfono -->
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" placeholder="introduce un numero de 9 dígitos"  title="El numero debe contener de 9 dígitos" pattern="([0-9]{9})" required>
 
    <!-- Campo Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>  
 
    <!-- Repetir Email -->
    <label for="repetir_email">Repetir Email:</label>
    <input type="email" id="repetir_email" name="repetir_email" required>
 <!-- password -->
    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" minlength="8" maxlength="20" required>
 
    <!-- Fecha de Reserva -->
<!-- Fecha de Reserva -->
<label for="fecha_reserva">Fecha de Reserva:</label>
<input type="date" id="fecha_reserva" name="fecha_reserva" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+20 days')); ?>" required>
 
    <!-- Hora de Entrada -->
    <label for="hora_entrada">Hora de Entrada:</label>
    <input type="time" id="hora_entrada" name="hora_entrada"  max="24:00" min="13:00" required>
 
    <!-- Número de Comensales -->
    <label for="num_comensales">Número de Comensales:</label>
    <input type="number" id="num_comensales" name="num_comensales" max="10" min="1" required>
 
    <!-- Motivo -->
    <label for="motivo">Motivo:</label>
    <textarea id="motivo" name="motivo" rows="4" ></textarea>
 
    <!-- Botón de Enviar -->
    <button type="submit">Enviar Reserva</button>
</form>
</div>
 
 
<?php require("footer.php"); ?>
 
 
 
</body>
</html>