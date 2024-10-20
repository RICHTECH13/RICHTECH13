<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $correo = htmlspecialchars($_POST['correo']);
    $servicio = htmlspecialchars($_POST['servicio']);

    // Establece el correo electrónico de destino
    $to = "stivencaceresgutierrezs@gmail.com";  // Reemplaza con tu correo electrónico
    $subject = "Nuevo mensaje de contacto de " . $nombre;
    $message = "Nombre: $nombre\nApellido: $apellido\nTeléfono: $telefono\nCorreo Electrónico: $correo\nServicio Necesario: $servicio";

    // Cabeceras del correo
    $headers = "From: $correo" . "\r\n" .
               "Reply-To: $correo" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.";
    }
}
?>
