<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar los parámetros de correo electrónico
$destinatario = 'santiagoceballos@gmail.com';
$asunto = 'Nuevo mensaje del formulario de contacto';

// Crear el cuerpo del mensaje
$cuerpo = "Nombre: $nombre\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= "Mensaje:\n$mensaje\n";

// Enviar el correo electrónico
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
mail($destinatario, $asunto, $cuerpo, $headers);

// Redirigir al usuario a una página de confirmación
header('Location: confirmacion.html');
?>
