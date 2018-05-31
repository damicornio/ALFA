<?php
error_reporting(0);

$nombre = $_POST['Name'];
$mail= $_POST['Email'];
$opinion=$_POST['Comment'];

$header = 'From: ' . $mail .;
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su email es: " . $mail . " \r\n";
$mensaje .="Lo que pregunto: " .$opinion . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'damiangarcia.g95@hotmail.com';
$asunto = 'Duda en pagina web por ' . $mail;

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente.';

?> 