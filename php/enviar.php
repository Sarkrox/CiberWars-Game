<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "jeisson.castro@cun.edu.co"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Mensaje de contacto de Ciberwars";

    $mensaje_email = "Nombre: " . $nombre . "\n";
    $mensaje_email .= "Correo Electrónico: " . $email . "\n";
    $mensaje_email .= "Mensaje:\n" . $mensaje;

    // Envía el correo
    mail($destinatario, $asunto, $mensaje_email);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
}
?>
