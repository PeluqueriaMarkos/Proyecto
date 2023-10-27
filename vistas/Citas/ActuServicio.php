<?php
include "../../config/config.php";
include "../../config/conexion.php";
$Consultar = "select * from servicios where id =" . $_REQUEST["id"];
$resultado = mysqli_query($conexion, $Consultar);
session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_IMG ?>tijeras.ico">
    <link rel="stylesheet" href="<?= URL_CSS ?>estilitos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Actualizar Servicio</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">Actualiza los servicios</h1>
        </div>
        <div class="formu">
            <div class="subformu">
                <form method="POST" action="<?= URL_CRU ?>serv.php">
                    <?php

                    while ($fila = $resultado->fetch_assoc()) {

                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Codigo*</label>
                                <input type="hidden" minlength="6" maxlength="11" 
                                    value="<?php echo $fila['id'] ?>" name="id">
                                <input type="number" class="form-control" pattern="[A-Za-z]{2-20}" name="codigo" required
                                    VALUE="<?php echo $fila['codigo'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Descripción*</label>
                                <input type="TEXT" pattern="[0-9!?-]{6,10}" class="form-control" name="descripcion"
                                    VALUE="<?php echo $fila['descripcion'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Estado*</label>
                                <input type="text" type="text" class="form-control" pattern="{15,30}" name="estado" required
                                    VALUE="<?php echo $fila['estado'] ?>">
                            </div>
                        </div>
                        <?php
                    }

                    ?>
                    <input type="hidden" value="actualizar" name="metodo">
                    <button id="boton" type="submit" class="btn btn-info">Actualizar</button>
                </form>
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