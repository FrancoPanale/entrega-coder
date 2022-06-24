<?php

$nombre = $_POST ['name'];
$mail = $_POST ['email'];
$mensaje = $_POST ['textarea'];

// MENSAJE

$mensaje = "Este mensaje fue enviado por:" . $nombre . " /r/n";
$mensaje = "Su e-mail es:" . $mail . " /r/n";
$mensaje = "Mensaje:" . $_POST['mensaje'] . " /r/n";
$mensaje = "Enviado el" .date('d/m/y', time());

//DESTINO:
$para = 'francopanale@gmail.com';
$asunto = 'Enviado desde la Web';

//FUNCION MAIL

mail($para, $asunto, utf8_decode($mensaje), $header);

// REEDIRECCION
$header('location:send.html');

?>