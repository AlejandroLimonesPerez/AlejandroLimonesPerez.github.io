<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "olimones101692@ppsc.edu.mx"; // correo
    $subject = "Nuevo mensaje del sitio web";
    $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Intenta más tarde.";
    }
}
?>