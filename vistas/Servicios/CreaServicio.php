<?php include "../../config/config.php";
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
    <title>Crear Servicio</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">CREA NUEVOS SERVICIOS</h1>
        </div>
        <div class="formu">
            <div class="subformu">
                <form method="POST" action="<?= URL_CRU ?>serv.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Codigo*</label>
                            <input type="number" minlength="6" maxlength="11" placeholder="Ingrese el codigo"
                                class="form-control" name="codigo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Descripción*</label>
                            <input type="text" placeholder="Ingrese la Descripción" class="form-control"
                                name="descripcion" pattern="[A-Za-z]{2-20}" required>
                        </div>
                        <input type="hidden" value="Activo" name="estado">
                    </div>
                    <input type="hidden" value="agregar" name="metodo">
                    <input type="hidden" type="text" class="form-control" pattern="{15,30}" name="id">
                    <button id="boton" type="submit" class="btn btn-info">Ingresar</button>
                    <a href="consulServicio.php"><button onclick="window.history.back()" class="btn btn-info">Regresar</button></a>
                </form>
            </div>
        </div>
    </nav>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>