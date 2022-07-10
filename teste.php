<?php

require 'vendor/autoload.php';

$mail = new PHPMailer(true);



try{$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'renanpereira0903@gmail.com';
$mail->Password = 'Sz981224282re@suzano';
$mail->SMTPSecure = 'tls';
$mail->Port =  587;

$mail->AddAddress('renanpereira0903@gmail.com');

$mail->isHTML();
$mail->Subject = "E-mail de teste";
$mail->Body = "Olá, estamos testando um novo e-mail";


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
