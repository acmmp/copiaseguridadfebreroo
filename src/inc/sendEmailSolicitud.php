<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Incluye los archivos necesarios de PHPMailer
require_once("src/phpmailer/PHPMailer.php");
require_once("src/phpmailer/SMTP.php");
require_once("src/phpmailer/Exception.php");



function sendEmailFromMe($email, $nombre, $asunto, $mensaje ){

    // Envío de correo de confirmación
    $smtphost="send.one.com";
    $smtpUsername = "web@kutral.es";
    $smtpPassword = "ProyectoKUTRAL1#"; // Reemplaza con la contraseña de tu cuenta de Gmail
    $emailFrom = "web@kutral.es";
    $emailFromName = "KUTRAL";

    // Configuración de PHPMailer y envío de correo
    // require_once("enviar_correo.php");

    // Configura el objeto PHPMailer
    $mail = new PHPMailer(true); // El argumento true activa las excepciones en caso de errores

    $mail->isSMTP();
    //$mail->SMTPDebug = 2;
    $mail->Host = $smtphost;
    $mail->Port = 465 ;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->setFrom($emailFrom, $emailFromName);
    $mail->addAddress($email, $nombre);
    $mail->Subject = $asunto;
    $mail->msgHTML($mensaje);
    $mail->AltBody = 'El correo electrónico no soporta mensajes HTML';

    try {
        // Intenta enviar el correo
        $mail->send();
        return true;
        //header("Location: infopostreservapagina.php");

    } catch (Exception $e) {
        // echo "Error al enviar el correo: " . $mail->ErrorInfo;
        return false;
    }

}
















//SOLICITUD PENDIENTE QUE LE LLEGA AL USUARIO _____________________________________________________________________________

    function sendEmailSolicitud($email, $nombre, $fecha_reserva,$hora_entrada, $num_comensales ){

        require "emails/solicitud_cliente.php";




// EMAIL QUE LE LLEGA AL ADMIN    ___________________________________________________________________________________________
        require "emails/entrada_reserva.php";

        if(sendEmailFromMe( $email, $nombre, "Has solicitado una reserva", $mensaje_cliente)){

            if( sendEmailFromMe('inforestaurantekutral@gmail.com', 'Kutral restaurante', "Has recibido una nueva reserva de $nombre", $mensaje_admin)){
                return true;
            } else return false;
        } else return false;


    }

?>