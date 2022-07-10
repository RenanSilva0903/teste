<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);



try{$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '83d213071a63df';
$mail->Password = 'dc7fe92938b6b5';
$mail->SMTPSecure = 'tls';
$mail->Port =  2525;

$mail->setFrom("renansilva0309@outlook.com", "Conslulta");
$mail->AddAddress('renanpereira0903@gmail.com');

$mail->isHTML();
$mail->Subject = "E-mail de teste";
$mail->Body = "Olá, estamos testando um novo e-mail";


    $mail->send();
    echo 'Messagem enviada com sucesso';
} catch (Exception $e) {
    echo "Messagem não pode ser enviada!. Mailer Error: {$mail->ErrorInfo}";
}
