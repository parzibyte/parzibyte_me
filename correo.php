<?php
define("CLAVE_SECRETA", "[TU_CLAVE]");
# Comprobamos si enviaron el dato
if (!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
    exit("Debes completar el captcha");
}
if (!isset($_POST["correo"]) || !isset($_POST["mensaje"])) {
    exit("No escribiste tu correo o mensaje");
}

$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

# Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
$token = $_POST["g-recaptcha-response"];
$verificado = verificarToken($token, CLAVE_SECRETA);

if (!$verificado) {
    exit("Error verificando el captcha");
}

$correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
if (!$correo) {
    echo "Correo inválido. Intenta con otro correo.";
    exit;
}

$datos = "Correo: $correo\nMensaje: $mensaje";
$destinatario = "parzibyte@gmail.com";
$encabezados = "Sender: contacto@parzibyte.me\r\n";
$encabezados .= 'From: Visitante desconocido <' . $correo . ">\r\n";
$encabezados .= "Reply-To: Visitante <$correo>\r\n";
$resultado = mail($destinatario, "Mensaje de sitio web", "Has recibido un mensaje desde el formulario de contacto de tu sitio web. Aquí están los detalles:\n$datos", $encabezados);
if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por contactarme!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones mis respuestas quedan ahí. Recuerda que también puedes contactarme en <a href='https://t.me/parzibyte'>Telegram</a> y <a href='https://facebook.com/parzibyte.fanpage'>Facebook</a></p>";
} else {
    echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
}
echo '<a href="javascript:history.back()">Volver</a> ';

/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 *
 * Más información: https://parzibyte.me/blog/2019/08/21/peticion-http-php-json-formulario/
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }
    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/
    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}
