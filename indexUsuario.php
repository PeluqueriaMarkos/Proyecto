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
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>

    <nav class="cuadrito">
        <?php
        include FOLDER_TEMPLATE . "body.php";
        ?>
    </nav>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>