<!DOCTYPE html>
<html lang="es">
<?php include "../../config/config.php";
session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_IMG ?>tijeras.ico">
    <link rel="stylesheet" href="<?= URL_CSS ?>estilitos.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>inicioSe.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Inicio sesión</title>
</head>

<body>

    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">Inicio sesión</h1>
        </div>
        <div class="aInicio">
            <div class="inicio">
                <form method="POST" action="../../config/inicioSesion.php">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" minlength="6" maxlength="30" class="form-control" name="idUsu"
                            placeholder="Ingrese su documento" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" pattern="[A-Za-z0-9!?-]{8,12}" class="form-control" name="passUsu"
                            placeholder="Ingrese su contraseña" required>
                    </div>
                    <button id="boton" type="submit" class="btn btn-info">Ingresar</button>
                </form>
                <form method="POST" action="../../config/logout.php">
                    <button id="boton" type="submit" class="btn btn-info">Regresar</button>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>