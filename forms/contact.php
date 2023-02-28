<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'vittokpo@gmail.com';

    // Crea el encabezado del correo electrónico
    $headers = "De: $name <$email>" . "\r\n";
    $headers .= "Respuesta a: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Crea el cuerpo del correo electrónico
    $email_body = "Has recibido un nuevo mensaje de contacto desde tu sitio web:<br><br>";
    $email_body .= "<strong>Nombre:</strong> $name<br>";
    $email_body .= "<strong>Email:</strong> $email<br>";
    $email_body .= "<strong>Asunto:</strong> $subject<br>";
    $email_body .= "<strong>Mensaje:</strong> $message<br>";

    // Envía el correo electrónico
    if (mail($to, $subject, $email_body, $headers)) {
        // Si el correo electrónico se ha enviado correctamente, muestra el mensaje de éxito
        echo "¡Tu mensaje se ha enviado con éxito!";
    } else {
        // Si no se pudo enviar el correo electrónico, muestra un mensaje de error
        echo "Lo sentimos, ha habido un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }

} else {
    // Si el método de solicitud no es POST, redirige al formulario de contacto
    header('Location: /ruta/a/tu/formulario-de-contacto');
}
?>
