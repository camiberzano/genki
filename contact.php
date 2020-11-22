<?php

include("Mailer/src/PHPMailer.php");

$mail = new PHPMailer();

try {

    $emailto = $_POST["email"];
    $subject = "Nueva consulta en la página";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $bodyemail = $_POST["message"];
    $fromemail = "consultas@genkipilates.com.ar";
    $fromname = "Genki Pilates";
    $host = "mail.genkipilates.com.ar";
    $port = "465";
    $SMTPAuth = "login";
    $SMTPSecure = "SSL";
    $password = "Lyz839JrUM8e";

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $password;

    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($emailto);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $bodyemail;

    if (!$mail->send()) {
        error_log("No se pudo enviar el correo!", );
    }
  
    echo "Correo enviado con éxito!";

} 

?>
