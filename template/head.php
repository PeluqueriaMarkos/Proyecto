<head>
    <link rel="stylesheet" href="<?= URL_CSS ?>head.css">
    <link rel="icon" href="<?= URL_IMG ?>huella.ico">
</head>
<?php

if (!$_SESSION) {

    ?>

    <body>
        <div class="cuadro">
            <div class="imag">
                <img src="<?= URL_IMG ?>marcos.png">
            </div>
            <div class="menu">
                <div class="saludo">
                    <h1 class="display">Bienvenido</h1>
                </div>
                <div class="botom">
                    <a href="<?= URL_Index ?>" class="btn btn-info">Inicio</a>
                    <a href="" class="btn btn-info">Nosotros</a>
                    <a href="" class="btn btn-info">Servicios</a>
                    <a href="" class="btn btn-info">Contacto</a>
                    <a href="<?= URL_VIW ?>Personas/ingresar.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>

        </div>
    </body>
    <?php
} else {

    if ($_SESSION['rolUsuario'] == "gerente") {

        ?>

        <body>
            <div class="cuadro">
                <div class="imag">
                    <img src="<?= URL_IMG ?>marcos.png">
                </div>
                <div class="menu">
                    <div class="saludo">
                        <h1 class="display">Bienvenido</h1>
                    </div>
                    <div class="botom">
                        <a href="<?= URL_VIW ?>../indexUsuario.php" class="btn btn-info">Inicio</a>
                        <a href="vistas/personas/consulUsu.php" class="btn btn-info">Personas</a>
                        <a href="vistas/servicios/consulServicio.php" class="btn btn-info">Servicios</a>
                        <a href="vistas/Citas/ConsulCitas.php" class="btn btn-info">Agendamientos</a>
                        <form method="post" action="config/logout.php" class="btn btn-primary">
                            <a href="<?= URL_VIW ?>../index.php" class="btn btn-primary">Salir</a>
                        </form>
                    </div>
                </div>
            </div>
        </body>
        <?php

    } elseif ($_SESSION['rolUsuario'] == "supervisor") {

        ?>

        <body>
            <div class="cuadro">
                <div class="imag">
                    <img src="<?= URL_IMG ?>marcos.png">
                </div>
                <div class="menu">
                    <div class="saludo">
                        <h1 class="display">Bienvenido</h1>
                    </div>
                    <div class="botom">
                        <a href="<?= URL_VIW ?>../indexUsuario.php" class="btn btn-info">Inicio</a>
                        <a href="vistas/personas/consulUsu.php" class="btn btn-info">Personas</a>
                        <a href="vistas/servicios/consulServicio.php" class="btn btn-info">Servicios</a>
                        <a href="vistas/Citas/ConsulCitas.php" class="btn btn-info">Citas</a>
                        <form method="post" action="config/logout.php" class="btn btn-primary">
                            <a href="<?= URL_VIW ?>../index.php" class="btn btn-primary">Salir</a>
                        </form>
                    </div>
                </div>

            </div>
        </body>
        <?php
    } elseif ($_SESSION['rolUsuario'] == "empleado") {

        ?>

        <body>
            <div class="cuadro">
                <div class="imag">
                    <img src="<?= URL_IMG ?>marcos.png">
                </div>
                <div class="menu">
                    <div class="saludo">
                        <h1 class="display">Bienvenido</h1>
                    </div>
                    <div class="botom">
                        <a href="<?= URL_VIW ?>../indexUsuario.php" class="btn btn-info">Inicio</a>
                        <a href="vistas/Citas/ConsulCitasEmpleado.php" class="btn btn-info">Agendamientos</a>
                        <form method="post" action="config/logout.php" class="btn btn-primary">
                            <a href="<?= URL_VIW ?>../index.php" class="btn btn-primary">Salir</a>
                        </form>
                    </div>
                </div>

            </div>
        </body>
        <?php
    } elseif ($_SESSION['rolUsuario'] == "cliente") {

        ?>

        <body>
            <div class="cuadro">
                <div class="imag">
                    <img src="<?= URL_IMG ?>marcos.png">
                </div>
                <div class="menu">
                    <div class="saludo">
                        <h1 class="display">Bienvenido</h1>
                    </div>
                    <div class="botom">
                        <a href="<?= URL_VIW ?>../indexUsuario.php" class="btn btn-info">Inicio</a>
                        <a href="vistas/servicios/consulServicio.php" class="btn btn-info">Servicios</a>
                        <a href="vistas/Citas/ConsulCitasCliente.php    " class="btn btn-info">Citas</a>
                        <form method="post" action="config/logout.php" class="btn btn-primary">
                            <a href="<?= URL_VIW ?>../index.php" class="btn btn-primary">Salir</a>
                        </form>
                    </div>
                </div>

            </div>
        </body>

        <?php
    }
}
?>