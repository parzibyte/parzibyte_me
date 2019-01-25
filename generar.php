<?php
$salida = "index.html";
ob_start();
include_once "index.php";
# ¿Expresiones regulares? ¿Optimización? aquí no hacemos eso.png
$contenido = ob_get_clean();
$contenido = str_replace("\n", "", $contenido);
$contenido = str_replace("\t", "", $contenido);
$contenido = str_replace("\t\t", "", $contenido);
$contenido = str_replace("  ", "", $contenido);
$escrito = file_put_contents("index.html", $contenido);
if ($escrito !== FALSE) {
    echo "Contenido generado y guardado en $salida";
} else {
    echo "Eror escribiendo en $salida";
}
?>