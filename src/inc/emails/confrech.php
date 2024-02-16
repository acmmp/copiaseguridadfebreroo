
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once("src/phpmailer/PHPMailer.php");
require_once("src/phpmailer/SMTP.php");
require_once("src/phpmailer/Exception.php");


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'imap.one.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'inforestaurantekutral@gmail.com';                     //SMTP username
    $mail->Password   = 'dgai vspo qdhl myoy';     //SMTP password DE LA CONTRASEÑA DE APLICACION. AL ESTAR HABILITADO SEGURIDAD 2 PASOS EN GMAIL


    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('javialarcon29@gmail.com', 'Gmail');
    $mail->addAddress('javialarcon29@gmail.com', 'Gmail');     //Add a recipient
}
    ?>