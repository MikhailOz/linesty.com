<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendMail($email, $subject, $msg) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rizylacoste@gmail.com';
    $mail->Password = 'wqprgcooviqmbrzy';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('rizylacoste@gmail.com');
    $mail->isHTML(true);

    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->send();
}