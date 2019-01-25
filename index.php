<?php
$urlBase = trim(file_get_contents("url_base.txt"));
$persona = [
    "titulo" => "Desarrollador móvil y web full-stack",
    "nombre" => "Luis Cabrera Benito",
    "foto" => "$urlBase/img/perfil.jpg",
    "alias" => "parzibyte",
    "correo" => "contacto@parzibyte.me",
    "descripcion_corta" => "Desarrollador web full-stack y móvil. Interesado en trabajar contigo, unirme a tu equipo de desarrolladores o asesorarte de manera remota para llevar tu idea a la realidad",
    "descripcion" => "Hola, soy Luis Cabrera Benito (a.k.a. parzibyte): un desarrollador móvil y full-stack profesional con más de 5 años de experiencia, especializado en <strong>PHP, JavaScript, Python y Go</strong>",
    "blog" => "https://parzibyte.me/blog"
];
$imagenGenerica = "$urlBase/img/placeholder.jpg";
?>

<!doctype html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo trim(file_get_contents("gtag.txt")) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo trim(file_get_contents("gtag.txt")) ?>');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="twitter:image"
          content="<?php echo $persona["foto"] ?>"/>
    <meta name="twitter:description"
          content="<?php echo $persona["nombre"] . " (" . $persona["alias"] . "): " . $persona["descripcion_corta"] ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="description"
          content="<?php echo $persona["nombre"] . " (" . $persona["alias"] . "): " . $persona["descripcion_corta"] ?>">
    <meta property="og:image"
          content="<?php echo $persona["foto"] ?>"/>
    <meta property="og:locale" content="es_LA"/>
    <meta property="og:url" content="https://parzibyte.me/"/>
    <meta property="og:site_name"
          content="Sitio oficial de <?php echo $persona["nombre"] . " (" . $persona["alias"] . ")" ?>"/>
    <meta property="og:title"
          content="Sitio oficial de <?php echo $persona["nombre"] . " (" . $persona["alias"] . ")" ?>"/>
    <meta property="og:description"
          content='<?php echo $persona["nombre"] . ": " . $persona["descripcion_corta"] ?>'/>
    <title><?php echo $persona["nombre"] ?> | <?php echo $persona["titulo"] ?></title>
    <style>
        .devicons.xl {
            font-size: 10rem;
        }

        img {
            max-width: 100%;
        }

        .legible {
            font-size: 1.3rem;
        }
    </style>
    <link rel="shortcut icon" href="<?php echo $persona["foto"] ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo $persona["foto"] ?>" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand"
       href="#inicio"><?php echo ucfirst($persona["alias"]) ?></a>
    <button class="navbar-toggler" type="button" id="botonMenu" aria-label="Mostrar / ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="#portafolio">Portafolio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#habilidades">Habilidades</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#experiencia">Experiencia laboral</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#titulos">Títulos y educación</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#servicios">Servicios</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" target="_blank" href="<?php echo $persona["blog"] ?>">Blog</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="scrollArea">
    <section id="inicio">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Bienvenido al sitio de <?php echo $persona["nombre"] ?></h1>
                <img style="width: 100px;" src="<?php echo $persona["foto"] ?>"
                     class="rounded-circle mx-auto d-block"
                     alt="Foto de perfil de <?php echo $persona["nombre"] ?>">
            </div>
        </div>
        <?php include_once "./bloques/encabezado.php" ?>
    </section>
    <hr>
    <section id="portafolio">
        <?php include_once "./bloques/proyectos.php" ?>
    </section>
    <hr>
    <section id="habilidades">
        <?php include_once "./bloques/habilidades.php" ?>
    </section>
    <hr>
    <section id="experiencia">
        <?php include_once "./bloques/experiencia_laboral.php" ?>
    </section>
    <hr>
    <section id="titulos">
        <?php include_once "./bloques/titulos.php" ?>
    </section>
    <hr>
    <section id="servicios">
        <?php include_once "./bloques/servicios.php" ?>
    </section>
    <hr>
</div>
<hr>
<?php include_once "./bloques/footer.php"; ?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const cargarIconos = () => {
            const linkIconos = document.createElement("link");
            linkIconos.rel = "stylesheet";
            linkIconos.href = "https://cdn.jsdelivr.net/npm/devicons@1.8.0/css/devicons.min.css";
            document.head.insertBefore(linkIconos, document.head.childNodes[document.head.childNodes.length - 1].nextSibling);
        };

        const estilos = ["https://fonts.googleapis.com/css?family=Neucha|Cabin+Sketch", "<?php echo $urlBase ?>/css/bootstrap.min.css"];
        estilos.forEach(enlace => {
            const linkFuente = document.createElement("link");
            linkFuente.rel = "stylesheet";
            linkFuente.href = enlace;
            document.head.insertBefore(linkFuente, document.head.childNodes[document.head.childNodes.length - 1].nextSibling);
        });
        const menu = document.querySelector("#menu"),
            botonMenu = document.querySelector("#botonMenu");
        if (menu) {
            botonMenu.addEventListener("click", () => menu.classList.toggle("show"));
            document.querySelectorAll(".nav-item").forEach(elemento => {
                elemento.addEventListener("click", () => menu.classList.remove("show"));
            });
        }
        const $imagenes = document.querySelectorAll(".tarjeta-proyecto");
        const $imagenOlimpiada = document.querySelector("#img-olimpiada");
        if ("undefined" === typeof IntersectionObserver) {
            $imagenes.forEach(imagen => imagen.src = imagen.dataset.src);
            $imagenOlimpiada.src = $imagenOlimpiada.dataset.src;
            cargarIconos();
            return;
        }

        const opciones = {
            threshold: 0.3
        };
        const $seccionHabilidades = document.querySelector("#habilidades");
        const observadorIconos = new IntersectionObserver(elementos => {
            elementos.forEach(elemento => {
                if (elemento.intersectionRatio > 0) {
                    cargarIconos();
                    observadorIconos.unobserve($seccionHabilidades);
                }
            });
        });
        const observadorImagenes = new IntersectionObserver(function (entradas) {
            for (let i = 0; i < entradas.length; entradas++) {
                const entrada = entradas[i];
                if (entrada.intersectionRatio > 0) {
                    const imagenes = entrada.target.querySelectorAll("img");
                    imagenes.forEach(imagen => {
                        imagen.src = imagen.dataset.src;
                    });
                    observadorImagenes.unobserve(entrada.target);
                }
            }
        }, opciones);

        const observadorOlimpiada = new IntersectionObserver(function (entradas) {
            entradas.forEach(entrada => {
                if (entrada.intersectionRatio > 0) {
                    entrada.target.src = entrada.target.dataset.src;
                    observadorOlimpiada.unobserve(entrada.target);
                }
            });
        });

        observadorOlimpiada.observe($imagenOlimpiada);
        $imagenes.forEach($imagen => observadorImagenes.observe($imagen));
        observadorIconos.observe($seccionHabilidades);
    });
</script>
</body>
</html>