<head>
    <link rel="stylesheet" href="<?= URL_CSS ?>body.css">
    <link rel="icon" href="<?= URL_IMG ?>huella.ico">
</head>
<?php

if (!$_SESSION) {

    ?>

    <body>
        <nav class="cuerpo">
            <div class="desl">
                <marquee>CUIDAMOS TU CABELLO COMO CUIDAMOS EL PLANETA</marquee>
            </div>
            <div class="kamaru">
                <img src="<?= URL_IMG ?>BODY.jpg">
            </div>
            <div class="msv">
                <div class="visi">
                    <img src="<?= URL_IMG ?>vision.png">
                    <p>La meta de la peluquería es que el sistema funcione para que el rendimiento de la peluquería sea más
                        eficiente y poder abrir más sucursales.</p>
                </div>
                <div class="misi">
                    <img src="<?= URL_IMG ?>mision.png">
                    <p>Objetivo de servir a la sociedad para facilitar el servicio que ofrecemos.</p>
                </div>
                <div class="valo">
                    <img src="<?= URL_IMG ?>valores.png">
                    <p>El buen trabajo, rendimiento laborar, Exelente atención al cliente.</p>
                </div>
            </div>
            <div class="veter">
                <div class="ayuda">
                    <h3 class="display">¿Necesitas un corte?</h3>
                    <a href="vistas/Personas/creausu.php" class="btn btn-info">agendate</a>
                </div>
            </div>
        </nav>
    </body>
    <?php
} else {

    if ($_SESSION['rolUsuario'] == "gerente") {

        ?>

        <body>
            <nav class="cuerpo">
                <div class="desl">
                    <marquee>CUIDAMOS TU CABELLO COMO CUIDAMOS EL PLANETA</marquee>
                </div>
                <div class="msv">
                    <div class="visi">
                        <img src="<?= URL_IMG ?>vision.png">
                        <p>La meta de la peluquería es que el sistema funcione para que el rendimiento de la peluquería sea más
                            eficiente y poder abrir más sucursales.</p>
                    </div>
                    <div class="misi">
                        <img src="<?= URL_IMG ?>mision.png">
                        <p>Objetivo de servir a la sociedad para facilitar el servicio que ofrecemos.</p>
                    </div>
                    <div class="valo">
                        <img src="<?= URL_IMG ?>valores.png">
                        <p>El buen trabajo, rendimiento laborar, Exelente atención al cliente.</p>
                    </div>
                </div>
            </nav>
        </body>
        <?php

    } elseif ($_SESSION['rolUsuario'] == "supervisor") {

        ?>

        <body>
            <nav class="cuerpo">
                <div class="desl">
                    <marquee>CUIDAMOS TU CABELLO COMO CUIDAMOS EL PLANETA</marquee>
                </div>
                <div class="msv">
                    <div class="visi">
                        <img src="<?= URL_IMG ?>vision.png">
                        <p>La meta de la peluquería es que el sistema funcione para que el rendimiento de la peluquería sea más
                            eficiente y poder abrir más sucursales.</p>
                    </div>
                    <div class="misi">
                        <img src="<?= URL_IMG ?>mision.png">
                        <p>Objetivo de servir a la sociedad para facilitar el servicio que ofrecemos.</p>
                    </div>
                    <div class="valo">
                        <img src="<?= URL_IMG ?>valores.png">
                        <p>El buen trabajo, rendimiento laborar, Exelente atención al cliente.</p>
                    </div>
                </div>
            </nav>
        </body>
        <?php
    } elseif ($_SESSION['rolUsuario'] == "empleado") {

        ?>

        <body>
            <nav class="cuerpo">
                <div class="desl">
                    <marquee>CUIDAMOS TU CABELLO COMO CUIDAMOS EL PLANETA</marquee>
                </div>
                <div class="msv">
                    <div class="visi">
                        <img src="<?= URL_IMG ?>vision.png">
                        <p>La meta de la peluquería es que el sistema funcione para que el rendimiento de la peluquería sea más
                            eficiente y poder abrir más sucursales.</p>
                    </div>
                    <div class="misi">
                        <img src="<?= URL_IMG ?>mision.png">
                        <p>Objetivo de servir a la sociedad para facilitar el servicio que ofrecemos.</p>
                    </div>
                    <div class="valo">
                        <img src="<?= URL_IMG ?>valores.png">
                        <p>El buen trabajo, rendimiento laborar, Exelente atención al cliente.</p>
                    </div>
                </div>
            </nav>
        </body>
        <?php
    } elseif ($_SESSION['rolUsuario'] == "cliente") {

        ?>

        <body>
            <nav class="cuerpo">
                <div class="desl">
                    <marquee>CUIDAMOS TU CABELLO COMO CUIDAMOS EL PLANETA</marquee>
                </div>
                <div class="msv">
                    <div class="visi">
                        <img src="<?= URL_IMG ?>vision.png">
                        <p>La meta de la peluquería es que el sistema funcione para que el rendimiento de la peluquería sea más
                            eficiente y poder abrir más sucursales.</p>
                    </div>
                    <div class="misi">
                        <img src="<?= URL_IMG ?>mision.png">
                        <p>Objetivo de servir a la sociedad para facilitar el servicio que ofrecemos.</p>
                    </div>
                    <div class="valo">
                        <img src="<?= URL_IMG ?>valores.png">
                        <p>El buen trabajo, rendimiento laborar, Exelente atención al cliente.</p>
                    </div>
                </div>
            </nav>
        </body>

        <?php
    }
}
?>