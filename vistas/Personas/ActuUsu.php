<?php
include "../../config/config.php";
include "../../config/conexion.php";
$Consultar = "select * from personas where id =" . $_REQUEST["id"];
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
    <title>Actualizar Usuario</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">Actualiza los usuarios</h1>
        </div>
        <div class="formu">
            <div class="subformu">
                <form method="POST" action="<?= URL_CRU ?>usu.php">
                    <?php

                    while ($fila = $resultado->fetch_assoc()) {

                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Documento*</label>
                                <input type="hidden" minlength="6" maxlength="11" placeholder="Ingrese su documento"
                                    value="<?php echo $fila['id'] ?>" name="id">
                                <input type="number" minlength="6" maxlength="11" placeholder="Ingrese su documento"
                                    value="<?php echo $fila['documento'] ?>" class="form-control" name="documento" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo de Documento*</label>
                                <select name="tipodoc" class="form-control">
                                    <option value=" <?php echo $fila['tipo_documento'] ?>" selected>
                                        <?php echo $fila['tipo_documento'] ?>
                                    <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                    <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Primer Nombre*</label>
                                <input type="text" class="form-control" name="primer_n"
                                    placeholder="Escriba su Primer nombre" pattern="[A-Za-z]{2-20}"
                                    VALUE="<?php echo $fila['primer_nombre'] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" name="segundo_n" pattern="[A-Za-z]{2-20}"
                                    VALUE="<?php echo $fila['segundo_nombre'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Primer Apellido*</label>
                                <input type="text" class="form-control" name="primer_a"
                                    VALUE="<?php echo $fila['primer_apellido'] ?>" pattern="[A-Za-z]{2-20}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Segundo Apellido</label>
                                <input type="text" class="form-control" name="segundo_a"
                                    VALUE="<?php echo $fila['segundo_apellido'] ?>" pattern="[A-Za-z]{2-20}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Dirección*</label>
                                <input type="text" class="form-control" pattern="{15,30}" name="direccionUsu" required
                                    VALUE="<?php echo $fila['direccion'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono*</label>
                                <input type="number" pattern="[0-9!?-]{6,10}" class="form-control" name="telefono" required
                                    VALUE="<?php echo $fila['telefono'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Usuario*</label>
                                <input type="email" class="form-control" pattern="[A-Za-z]{2-20}" name="usuario" required
                                    VALUE="<?php echo $fila['usuario'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contraseña*</label>
                                <input type="hidden" pattern="[0-9!?-]{6,10}" class="form-control" name="contrasena"
                                    VALUE="<?php echo $fila['contrasena'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Rol*</label>
                                <select name="rol" class="form-control">
                                    <option value="<?php echo $fila['descripcion_rol'] ?>" selected>
                                        <?php echo $fila['descripcion_rol'] ?>
                                    <option value="Gerente">Gerente</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Cliente">Cliente</option>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Estado*</label>
                                <select name="estado" class="form-control" required>
                                    <option value="<?php echo $fila['estado'] ?>" selected><?php echo $fila['estado'] ?></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                    </option>
                                </select>
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