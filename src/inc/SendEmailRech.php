<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("src/phpmailer/PHPMailer.php");
require_once("src/phpmailer/SMTP.php");
require_once("src/phpmailer/Exception.php");

// La función recibe el email del usuario como parámetro
function enviarCorreorechazo($email) {
    $mail = new PHPMailer(true);

    try {
          // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'send.one.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'web@kutral.es';
        $mail->Password   = 'ProyectoKUTRAL1#';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

  
        // Remitente y destinatario
        $mail->setFrom('web@kutral.es', 'KUTRAL');
        $mail->addAddress($email);
















        // __________________________________________RESERVA RECHAZADA____________________________________
        $mail->isHTML(true);
        $mail->Subject = 'SU RESERVA HA SIDO RECHAZADA';
        $mail->Body = <<<EOHTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SU RESERVA HA SIDO RECHAZADA</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-image: url('https://www.restaurantekutral.com/wp-content/uploads/2021/04/DSC08802-1024x1024.jpg');
                    background-size: cover;
                    background-position: center;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
        
                header {
                    background-color: #ff6347; /* Tomato color */
                    color: white;
                    text-align: center;
                    padding: 20px;
                }
        
                section {
                    margin: 20px;
                }
        
                p {
                    margin-bottom: 10px;
                }
        
                footer {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 10px;
                }
            </style>
        </head>
        <body>
        
            <header>
            <h1>SU SOLICITUD HA SIDO RECHAZADA</h1>
            </header>
        
            <section>
                <p>Su reserva ha sido modificada de estado:</p>
                <p><strong>ESTADO RESERVA:</strong> RECHAZADA</p>
                <p>Sentimos las molestias.</p>
        
                <!-- Image in the section -->
                <img src="https://www.restaurantekutral.com/wp-content/uploads/2021/04/DSC08802-1024x1024.jpg" alt="Background Image">
            </section>
        
            <footer>
                <p>&copy; 2024 Kutral</p>
            </footer>
        
        </body>
        </html>
        EOHTML;

        // Envío del correo
        $mail->send();
        // echo 'EMAIL ENVIADO CORRECTAMENTE';

    } catch (Exception $e) {
        echo "ERROR AL ENVIAR EMAIL: {$mail->ErrorInfo}";
    }
}

// Ejemplo de uso:
$emailUsuario = $email; // Puedes obtener este valor de la URL o de donde sea necesario
enviarCorreorechazo($email);
?>
