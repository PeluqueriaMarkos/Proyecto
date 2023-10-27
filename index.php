<?php
include "config/config.php";
include "config/conexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_IMG ?>tijeras.ico">
    <link rel="stylesheet" href="<?= URL_CSS ?>estilito.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>head.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Salón De Belleza Markos</title>
</head>

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

    </div>
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
                <h3 class="display">___________</h3>
                <a href="vistas/Personas/creausu.php" class="btn btn-info">Crea tu usuario</a>
            </div>
        </div>
    </nav>
</body>
<nav class="foot">
    <?php
    include FOLDER_TEMPLATE . "footer.php";
    ?>
</nav>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>