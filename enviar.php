<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $to = "tu-correo@dominio.com";
    $subject = "Nuevo mensaje de contacto";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $body = "Has recibido un nuevo mensaje de contacto:\n\n";
    $body .= "Nombre: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensaje:\n$message\n";

    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>¡Mensaje enviado correctamente! Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<p>Lo sentimos, hubo un problema al enviar tu mensaje. Inténtalo más tarde.</p>";
    }
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
