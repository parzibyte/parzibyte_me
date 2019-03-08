<?php
if (!isset($_POST["correo"]) || !isset($_POST["mensaje"])) {
    exit;
}

$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
if (!$correo) {
    echo "Correo inválido. Intenta con otro correo.";
    exit;
}

$datos = "Correo: $correo\nMensaje: $mensaje";
$destinatario = "contacto@parzibyte.me";
$encabezados = 'From: ' . $correo . "\r\n";
$resultado = mail($destinatario, "Mensaje de sitio web", "Tienes un nuevo mensaje:\n$datos.\n--Fin del mensaje--", $encabezados);
if ($resultado) {
    echo "Tu mensaje se ha enviado correctamente.";
} else {
    echo "Tu mensaje no se ha podido enviar. Intenta de nuevo.";
}
echo '<a href="javascript:history.back()">Volver</a> ';
