<?php
$myemail = 'camila.berzano@gmail.com'
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $nombre \n E-Mail: $email \n Teléfono: $telefono \n Mensaje: \n $mensaje"
$header = "From: $email";

mail($to, $email_subject, $email_body, $header);
echo "El mensaje se ha enviado correctamente.";
?>
