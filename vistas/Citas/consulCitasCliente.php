<?php
include "../../config/config.php";
include "../../config/conexion.php";
$Consultar = "select c.id,
                     c.fecha, 
                     concat(p1.primer_nombre,' ',p1.primer_apellido) as empleado, 
                     concat(p2.primer_nombre,' ',p2.primer_apellido) as cliente, 
                     s.descripcion, 
                     c.estado 
                from citas c 
                inner join personas p1 on c.id_persona = p1.id 
                inner join personas p2 on c.persona_cita = p2.id 
                inner join servicios s on c.id_servicio = s.id";

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
    <title>Consultar Citas</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <?php

    if ($_SESSION['rolUsuario'] == "cliente") {

        ?>
        <div class="container">
            <div>
                <br>
                <h2 class="text-center">Consultar Citas</h2>
                <br>
                <div class="table " id="TablaConsultaPersonas">
                    <table class="table"
                        style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
                        <thead class="text-primary">
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Empleado</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Servicio</th>
                            <th class="text-center">Estado</th>
                        </thead>
                        <tbody class="text-dark">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $fila['fecha'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['empleado'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['cliente'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['descripcion'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['estado'] ?>
                                    </td>
                                    <td class="text-dark">
                                        <a href="../../modelo/delete/serv.php?id=<?php echo $fila['id'] ?>"
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
                            <a href="creaCitas.php" class="btn btn-info">Crear nueva Cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>