<?php
include "../../config/config.php";
include "../../config/conexion.php";
$Consultar = "select * from Servicios";
$resultado = mysqli_query($conexion, $Consultar);
session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_IMG ?>tijeras.ico">
    <link rel="stylesheet" href="<?= URL_CSS ?>estilito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Consultar Servicios</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <?php

    if ($_SESSION['rolUsuario'] == "gerente") {

        ?>
        <div class="container">
            <div>
                <br>
                <h2 class="text-center">Consultar Servicios</h2>
                <br>
                <div class="table " id="TablaConsultaPersonas">
                    <table class="table"
                        style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                        <thead class="text-primary">
                            <th class="text-center">Codigo</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Opciones</th>
                        </thead>
                        <tbody class="text-dark">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $fila['codigo'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['descripcion'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['estado'] ?>
                                    </td>
                                    <td class="text-dark">
                                        <a href="ActuServicio.php?id=<?php echo $fila['id'] ?>">Modificar</a> - <a
                                            href="../../modelo/delete/serv.php?id=<?php echo $fila['id'] ?>"
                                            class="table__eliminar">Eliminar</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="veter">
                        <div class="ayuda">
                            <a href="creaServicio.php" class="btn btn-info">Crear nuevo Servicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else if ($_SESSION['rolUsuario'] == "supervisor") {

        ?>
            <div class="container">
                <div>
                    <br>
                    <h2 class="text-center">Consultar Servicios</h2>
                    <br>
                    <div class="table " id="TablaConsultaPersonas">
                        <table class="table"
                            style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                            <thead class="text-primary">
                                <th class="text-center">Codigo</th>
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Estado</th>
                            </thead>
                            <tbody class="text-dark">
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                        <?php echo $fila['codigo'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['descripcion'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['estado'] ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php
    } else if ($_SESSION['rolUsuario'] == "cliente") {

        ?>
                ?>
                <div class="container">
                    <div>
                        <br>
                        <h2 class="text-center">Consultar Servicios</h2>
                        <br>
                        <div class="table " id="TablaConsultaPersonas">
                            <table class="table"
                                style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                                <thead class="text-primary">
                                    <th class="text-center">Codigo</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Estado</th>
                                </thead>
                                <tbody class="text-dark">
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>
                                        <?php echo $fila['codigo'] ?>
                                            </td>
                                            <td>
                                        <?php echo $fila['descripcion'] ?>
                                            </td>
                                            <td>
                                        <?php echo $fila['estado'] ?>
                                            </td>
                                        </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    <?php } ?>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>