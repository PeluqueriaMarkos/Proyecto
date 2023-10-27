<?php include "../../config/config.php";

include "../../config/conexion.php";
$Consultar = "select * FROM PERSONAS WHERE DESCRIPCION_ROL <> 'CLIENTE' and estado = 'activo'";
$Consultarcli = "select * FROM PERSONAS WHERE DESCRIPCION_ROL = 'CLIENTE' and estado = 'activo'";
$Consultarserv = "select * FROM servicios WHERE estado = 'activo'";

$resultado = mysqli_query($conexion, $Consultar);
$resultadocli = mysqli_query($conexion, $Consultarcli);
$resultadoserv = mysqli_query($conexion, $Consultarserv);
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
    <title>Crear Citas</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">CREA NUEVAS CITAS</h1>
        </div>
        <div class="formu">
            <div class="subformu">
                <form method="POST" action="<?= URL_CRU ?>cit.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>fecha*</label>
                            <input type="datetime-local" minlength="6" maxlength="11" placeholder="Ingrese la fecha"
                                class="form-control" name="fecha" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Empleado*</label>
                            <select name="Empleado" class="form-control" required>
                                <option value="" selected disabled>Selecciona...</option>
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value=" . $fila['id'] . " >" . $fila['primer_nombre'] . " " . $fila['primer_apellido'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Cliente*</label>
                            <select name="Cliente" class="form-control" required>
                                <option selected disabled>Selecciona...</option>
                                <?php
                                while ($fila = $resultadocli->fetch_assoc()) {
                                    echo "<option value=" . $fila['id'] . "  >" . $fila['primer_nombre'] . " " . $fila['primer_apellido'] . "</option>";
                                }
                                ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Servicio*</label>
                            <select name="Servicio" class="form-control" required>
                                <option value="" selected disabled>Selecciona...</option>
                                <?php
                                while ($fila = $resultadoserv->fetch_assoc()) {
                                    echo "<option value=" . $fila['id'] . "  >" . $fila['descripcion'] . "</option>";
                                }
                                ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Estado*</label>
                            <select name="estado" class="form-control" required>
                                <option value="" selected disabled>Selecciona...</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                                </option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" value="agregar" name="metodo">
                    <input type="hidden" type="text" class="form-control" pattern="{15,30}" name="id">
                    <button id="boton" type="submit" class="btn btn-info">Ingresar</button>
                    <a href="ConsulCitas.php"><button onclick="window.history.back()"
                            class="btn btn-info">Regresar</button></a>
                </form>
            </div>
        </div>
    </nav>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>