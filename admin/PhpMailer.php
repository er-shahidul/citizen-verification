<?php
require 'vendor/autoload.php';


function sendEmail($sender,$to,$messageBody,$subject){
    $mail = new PHPMailer;
    //$mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'imran@emicrograph.com';
    $mail->Password = 'i1m2r3a4n';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($sender, 'Mailer');
    $mail->addAddress($to);

    // $mail->addAttachment('/var/tmp/file.tar.gz');
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body    = $messageBody;
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

}
