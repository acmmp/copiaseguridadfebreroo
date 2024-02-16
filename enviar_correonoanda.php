<?php
// Variables proporcionadas por el formulario
$emailUsuario = $_POST['email'];   // Ajusta según el nombre real del campo en tu formulario

// Definir las variables necesarias
$smtpUsername = "inforestaurantekutral@gmail.com";
$smtpPassword = "dgai vspo qdhl myoy";
$emailFrom = "inforestaurantekutral@gmail.com";
$emailFromName = "KUTRAL";
$emailTo = $emailUsuario; // Usar la dirección de correo proporcionada por el usuario
$emailToName = "javialarcon29@gmail.com"; // Usar el nombre proporcionado por el usuario


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Incluye los archivos necesarios de PHPMailer
require_once("src/phpmailer/PHPMailer.php");
require_once("src/phpmailer/SMTP.php");
require_once("src/phpmailer/Exception.php");


// Configura el objeto PHPMailer
$mail = new PHPMailer(true); // El argumento true activa las excepciones en caso de errores

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = "imap.one.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress($emailTo, $emailToName);
$mail->Subject = 'Prueba de SMTP de PHPMailer con Gmail';
$mail->msgHTML("Cuerpo de prueba");
$mail->AltBody = 'El correo electrónico no soporta mensajes HTML';

try {
    // Intenta enviar el correo
    $mail->send();
    echo "¡Correo enviado!";
} catch (Exception $e) {
    echo "Error al enviar el correo: " . $mail->ErrorInfo;
}
?>
