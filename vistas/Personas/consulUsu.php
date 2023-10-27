<?php
include "../../config/config.php";
include "../../config/conexion.php";
$Consultar = "select * from personas";
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
    <title>Consultar Personas</title>
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
                <h2 class="text-center">Consultar Personas</h2>
                <br>
                <div class="table " id="TablaConsultaPersonas">
                    <table class="table"
                        style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                        <thead class="text-primary">
                            <th class="text-center">Documento</th>
                            <th class="text-center">Tipo Documento</th>
                            <th class="text-center">Primer Nombre</th>
                            <th class="text-center">Segundo Nombre</th>
                            <th class="text-center">Primer Apellido</th>
                            <th class="text-center">Segundo Apellido</th>
                            <th class="text-center">Dirección</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Usuario</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Opciones</th>
                        </thead>
                        <tbody class="text-dark">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $fila['documento'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['tipo_documento'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['primer_nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['segundo_nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['primer_apellido'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['segundo_apellido'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['direccion'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['telefono'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['descripcion_rol'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['usuario'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['estado'] ?>
                                    </td>
                                    <td class="text-dark">
                                        <a href="ActuUsu.php?id=<?php echo $fila['id'] ?>">Modificar</a> - <a
                                            href="../../modelo/delete/usu.php?id=<?php echo $fila['id'] ?>"
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
                            <h3 class="display">¿Necesitas un corte?</h3>
                            <a href="creausuger.php" class="btn btn-info">Crear nuevo usuario</a>
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
                    <h2 class="text-center">Consultar Personas</h2>
                    <br>
                    <div class="table " id="TablaConsultaPersonas">
                        <table class="table"
                            style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                            <thead class="text-primary">
                                <th class="text-center">Documento</th>
                                <th class="text-center">Tipo Documento</th>
                                <th class="text-center">Primer Nombre</th>
                                <th class="text-center">Segundo Nombre</th>
                                <th class="text-center">Primer Apellido</th>
                                <th class="text-center">Segundo Apellido</th>
                                <th class="text-center">Dirección</th>
                                <th class="text-center">Telefono</th>
                                <th class="text-center">Rol</th>
                                <th class="text-center">Usuario</th>
                                <th class="text-center">Estado</th>
                            </thead>
                            <tbody class="text-dark">
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                        <?php echo $fila['documento'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['tipo_documento'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['primer_nombre'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['segundo_nombre'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['primer_apellido'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['segundo_apellido'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['direccion'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['telefono'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['descripcion_rol'] ?>
                                        </td>
                                        <td>
                                        <?php echo $fila['usuario'] ?>
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
    }
    ?>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>