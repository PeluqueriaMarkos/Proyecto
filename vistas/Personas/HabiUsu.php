

<?php 
include "../../config/config.php";  
include "../../config/conexion.php";
session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=URL_IMG?>huella.ico">
    <link rel="stylesheet" href="<?=URL_CSS?>estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Crear Usuario</title>
</head>
<body>
    <nav class="cabeza">
        <?php
            include FOLDER_TEMPLATE."head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">HABILITA USUARIOS</h1>
        </div>
        <div class="formu">
            <div class="subformu" style="overflow-x:auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre y apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $consulta ="SELECT * FROM usuario where estadoUsuario = '0'";
                            $resultado= mysqli_query($conexion, $consulta);
                            while ($fila = $resultado->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?=$fila['idUsuario']?></th>
                            <td><?=$fila['nombreUsuario']." ".$fila['apellidoUsuario']?></td>
                            <td><?=$fila['correoUsuario']?></td>
                            <td><?=$fila['telefonoUsuario']?></td>
                            <td><?=$fila['direccionUsuario']?></td>
                            <td><?=$fila['rolUsuario']?></td>
                            <td><?=$fila['estadoUsuario']?></td>
                            <td><a href="<?=URL_HAB?>usu.php?idUsuario=<?=$fila['idUsuario']?>" class="btn btn-primary">Habilitar</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
             </div>
        </div>
    </nav>
</body>
<nav class="foot">
    <?php
        include FOLDER_TEMPLATE."footer.php";
    ?>
</nav>
<?php include FOLDER_TEMPLATE."scrips.php" ?>
</html>