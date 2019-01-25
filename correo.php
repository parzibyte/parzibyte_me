<?php
if (!isset($_POST["correo"]) || !isset($_POST["mensaje"])) exit;
$correo = htmlentities($_POST["correo"]);
$mensaje = htmlentities($_POST["mensaje"]);
$datos = "Correo: $correo\nMensaje: $mensaje";
$destinatario = "contacto@parzibyte.me";
$encabezados = 'From: Sitio web personal<contacto@parzibyte.me>' . "\r\n";
$resultado = mail($destinatario, "Mensaje de sitio web", "Tienes un nuevo mensaje:\n$datos.\n--Fin del mensaje--", $encabezados);
if ($resultado) {
    echo "Tu mensaje se ha enviado correctamente.";
} else {
    echo "Tu mensaje no se ha podido enviar. Intenta de nuevo.";
}
echo '<a href="javascript:history.back()">Volver</a> ';