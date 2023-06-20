<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $destinatario = 'vittokpo@gmail.com'; // Reemplaza con tu dirección de correo electrónico

  $cabeceras = "De: $nombre <$email>" . "\r\n";
  $cabeceras .= "Contestando: $email" . "\r\n";
  $cabeceras .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  $mensajeCorreo = "Nombre: $nombre<br>";
  $mensajeCorreo .= "Email: $email<br>";
  $mensajeCorreo .= "Asunto: $asunto<br>";
  $mensajeCorreo .= "Mensaje: $mensaje<br>";

  // Envía el correo electrónico
  mail($destinatario, $asunto, $mensajeCorreo, $cabeceras);
  exit();
}
?>
