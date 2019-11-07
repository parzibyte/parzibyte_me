<div class="row">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Sobre mí</h1>
        <p class="legible">
            <?php echo $persona["descripcion"] ?>
        </p>
        <a target="_blank" href="https://parzibyte.github.io/cv/" class="btn btn-success btn-lg">Mira o descarga mi CV</a> <a href="#portafolio" class="btn btn-info btn-lg">Portafolio</a> <a href="#habilidades" class="btn btn-primary btn-lg">Habilidades</a> <a target="_blank" href="<?php echo $persona["blog"] ?>" class="btn btn-warning btn-lg">Blog</a>
        <br><br>
        <div class="row text-center">
            <div class="col-3 col-md-2 offset-md-2">
                <a target="_blank" href="https://facebook.com/parzibyte.fanpage">
                    <img src="<?php echo $urlBase ?>/img/facebook-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en Facebook"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en Facebook">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="https://twitter.com/parzibyte">
                    <img src="<?php echo $urlBase ?>/img/twitter-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en Twitter"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en Twitter">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="https://www.youtube.com/channel/UCroP4BTWjfM0CkGB6AFUoBg">
                    <img src="<?php echo $urlBase ?>/img/youtube-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en YouTube"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en YouTube">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="https://t.me/joinchat/AAAAAFYVZ70V7PDPCaogBw">
                    <img src="<?php echo $urlBase ?>/img/telegram-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en Telegram"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en Telegram">
                </a>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-3 col-md-2 offset-md-2">
                <a target="_blank" href="https://github.com/parzibyte">
                    <img src="<?php echo $urlBase ?>/img/github-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en GitHub"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en GitHub">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="https://stackoverflow.com/users/5032550/luis-cabrera-benito">
                    <img src="<?php echo $urlBase ?>/img/stackoverflow-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en Stack Overflow"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en Stack Overflow">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="https://www.linkedin.com/in/parzibyte">
                    <img src="<?php echo $urlBase ?>/img/linkedin-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Seguir a <?php echo $persona["nombre"] ?> en LinkedIn"
                         alt="Seguir a <?php echo $persona["nombre"] ?> en LinkedIn">
                </a>
            </div>
            <div class="col-3 col-md-2">
                <a target="_blank" href="mailto:<?php echo $persona["correo"] ?>">
                    <img src="<?php echo $urlBase ?>/img/email-64.png"
                         class="rounded-circle mx-auto d-block"
                         title="Enviar correo electrónico a <?php echo $persona["nombre"] ?>"
                         alt="Enviar correo electrónico a <?php echo $persona["nombre"] ?>">
                </a>
            </div>
        </div>
        <p>
            <strong>Hey</strong>, probablemente llegaste aquí para ver mi blog: <a href="<?php echo $persona["blog"] ?>">Parzibyte's blog</a>
        </p>
        <div class="alert alert-success">
            <p>
                Te invito a seguir navegando para mostrarte lo que puedo hacer por ti, enseñarte lo que ya hago y las tecnologías en las que tengo experiencia
            </p>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <h1 class="text-center">Contáctame</h1>
        <p class="legible">
            Estoy interesado en trabajar contigo de manera remota para llevar tu idea a la realidad, formar parte de tu equipo de desarrolladores, ayudarte con tu tarea, dar asesorías y <strong>todo lo relacionado con tecnología y programación</strong>
        </p>
        <form method="post" action="correo.php">
            <div class="form-group">
                <label for="correo">Tu correo electrónico</label>
                <input required maxlength="1024" name="correo" type="email" class="form-control" id="correo"
                       placeholder="correo@dominio.com">
            </div>
            <div class="form-group">
                <label for="mensaje">Tu mensaje</label>
                <textarea required maxlength="1024" name="mensaje"
                          placeholder="Escribe tu idea o mensaje; sé lo más expresivo posible"
                          class="form-control"
                          id="mensaje" rows="3" cols="2"></textarea>
            </div>
            <div class="form-group">
            <label>Por favor, ayúdame a verificar que no eres un bot</label>
                <div
                    class="g-recaptcha"
                    data-sitekey="[TU_CLAVE]">
                </div>
            </div>
            <div class="form-group">
                <p>No te preocupes, no compartiré tus datos con nadie. Asegúrate de escribir un correo verdadero, pues ahí te responderé
                </p>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Enviar mensaje">
            </div>
        </form>
        <p>Yo me encargo de desarrollar tu idea y llevarla a la realidad</p>
    </div>
</div>
