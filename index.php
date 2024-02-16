<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUTRAL - Reserva</title>
    <link rel="stylesheet" href="index.css"> 
    
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
    
    
    
    <style>
                        /* Estilos para el modal de alerta */
                        .alert-modal {
                            display: none;
                            position: fixed;
                            z-index: 1;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            overflow: auto;
                            background-color: rgba(0, 0, 0, 0.4);
                        }
                        /* Estilos para el modal de alerta */
                    .alert-modal {
                    display: none;
                    position: fixed; /* Cambiado a posición fija */
                    z-index: 9999; /* Ajustado el índice z para que esté por encima de otros elementos */
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    background-color: rgba(0, 0, 0, 0.4);
}

 
        .alert-modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 10px;
            max-width: 400px;
            text-align: center;
        }
 
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
 
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
 
        /* Estilos para el formulario dentro del modal */
        .formulario label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }
 
        .formulario input[type="text"],
        .formulario input[type="tel"],
        .formulario input[type="email"],
        .formulario input[type="password"],
        .formulario input[type="date"],
        .formulario input[type="time"],
        .formulario textarea,
        .formulario button {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
 
        .formulario button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
 
        .formulario button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
 
<?php require("head.php"); ?>
 
<main class="main">
 
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Bienvenido a KUTRAL</h2>
            <p class="main__txt">
                Bienvenido a Kutral, donde la calidad y la hospitalidad se encuentran para crear momentos inolvidables. Nuestro equipo dedicado está aquí para hacer de tu visita una experiencia memorable. Ya sea que estés celebrando una ocasión especial, compartiendo momentos con seres queridos o simplemente disfrutando de una comida tranquila, en Kutral encontrarás el lugar perfecto para deleitar tus sentidos.
            </p>
        </div>
    </section>
 
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <img class="cover-image" src="https://images.pexels.com/photos/2544829/pexels-photo-2544829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Experimenta el sabor de KUTRAL , (Este diseño es una pagina de prueba TFG Grado superior)</h3>
                <p class="column__txt">Experimenta la fusión única de sabores auténticos y un ambiente acogedor en Kutral. Descubre una experiencia gastronómica excepcional, donde cada plato es una obra maestra cuidadosamente elaborada para deleitar tus sentidos.</p>
                <button id="reservaBtn" class="btn btn--contact">Reserva</button>
            </div>
        </div>
    </section>
 
    <!-- Modal de alerta -->
    <div id="alertModal" class="alert-modal">
        <div class="alert-modal-content">
            <span class="close" onclick="closeAlertModal()">&times;</span>
            <div class="centrar-formulario">
                <form action="procesar_formulario.php" method="post" class="formulario">
                                <h2>Formulario de Reserva</h2><br>
                                <!-- Campo Nombre -->
                               <label for="nombre">Nombre:</label>
                              <input type="text" id="nombre" name="nombre" required><br>
                         
                                <!-- Campo Teléfono -->
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" placeholder="introduce un numero de 9 dígitos" title="El numero debe contener de 9 dígitos" pattern="([0-9]{9})" required>
                         
                                <!-- Campo Email -->
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>  
                         
                                <!-- Repetir Email -->
                                <label for="repetir_email">Repetir Email:</label>
                                <input type="email" id="repetir_email" name="repetir_email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                               
                                <!-- password -->
                                <label for="contraseña">Contraseña:</label><input type="password" id="contraseña" name="contraseña" minlength="8" maxlength="20" required oninput="this.value = this.value.replace(/\s/g, '')">
                         
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
                                <textarea id="motivo" name="motivo" rows="4"></textarea>
                         
                                <!-- Botón de Enviar -->
                                <button type="submit">Enviar Reserva</button>
                </form>
            </div>
        </div>
    </div>
 
    <section class="group today-special">
        <h2 class="group__title">Nuestros Platos Especiales</h2>
        <div class="container container--flex">
            <div class="column column--50--25">
                <img src="https://www.restaurantekutral.com/wp-content/uploads/2019/05/Optimized-IMG_7380-1024x614.jpg" alt="" class="today-special__img">
                <div class="today-special__title">Chuletón "SIMMENTAL"</div>
                <div class="today-special__price">85,00€</div>
            </div>
 
            <div class="column column--50--25">
                <img src="https://www.restaurantekutral.com/wp-content/uploads/2021/02/IMG_2360-768x1024.jpg" alt="" class="today-special__img">
                <div class="today-special__title">Solomillo de vaca</div>
                <div class="today-special__price">30€</div>
            </div>
 
            <div class="column column--50--25">
                <img src="https://img.menudigitalqr.app/p/2749391621783330928.jpg" alt="" class="today-special__img">
                <div class="today-special__title">Solomillo de cerdo</div>
                <div class="today-special__price">28€</div>
            </div>
 
            <div class="column column--50--25">
                <img src="https://img.menudigitalqr.app/p/1593271624098593743.jpg" alt="" class="today-special__img">
                <div class="today-special__title">Presa Ibérica de Bellota</div>
                <div class="today-special__price">30€</div>
            </div>
        </div>
    </section>
 
</main>
 
<?php require("footer.php"); ?>
 
<script>
    var reservaBtn = document.getElementById("reservaBtn");
    var alertModal = document.getElementById("alertModal");
 
    reservaBtn.onclick = function() {
        alertModal.style.display = "block";
    }
 
    function closeAlertModal() {
        alertModal.style.display = "none";
    }
 
    window.onclick = function(event) {
        if (event.target == alertModal) {
            alertModal.style.display = "none";
        }
    }
    
    
</script>



<script>
    window.onload = function() {
        var email = document.getElementById("email");
        var confirmEmail = document.getElementById("repetir_email");

        function validateEmail() {
            if(email.value != confirmEmail.value) {
                confirmEmail.setCustomValidity("Los correos electrónicos no coinciden");
            } else {
                confirmEmail.setCustomValidity('');
            }
        }

        email.onchange = validateEmail;
        confirmEmail.onkeyup = validateEmail;
    }
</script>
</body>
</html>