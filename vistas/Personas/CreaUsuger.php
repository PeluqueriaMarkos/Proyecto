<?php include "../../config/config.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_IMG ?>huella.ico">
    <link rel="stylesheet" href="<?= URL_CSS ?>estilitos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Crear Usuario</title>
</head>

<body>
    <nav class="cabeza">
        <?php
        include FOLDER_TEMPLATE . "head.php";
        ?>
    </nav>
    <nav class="cuerpo">
        <div class="titulo">
            <h1 class="display">CREA TU USUARIO</h1>
        </div>
        <div class="formu">
            <div class="subformu">
                <form method="POST" action="<?= URL_CRU ?>usu.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Documento*</label>
                            <input type="number" minlength="6" maxlength="11" placeholder="Ingrese su documento"
                                class="form-control" name="documento" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tipo de Documento*</label>
                            <select name="tipodoc" class="form-control" required>
                                <option value="" selected>Selecciona...</option>
                                <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Primer Nombre*</label>
                            <input type="text" class="form-control" name="primer_n"
                                placeholder="Escriba su Primer nombre" pattern="[A-Za-z]{2-20}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Segundo Nombre</label>
                            <input type="text" class="form-control" name="segundo_n"
                                placeholder="Escriba su segundo nombre" pattern="[A-Za-z]{2-20}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Primer Apellido*</label>
                            <input type="text" class="form-control" name="primer_a"
                                placeholder="Escriba su Primer apellido" pattern="[A-Za-z]{2-20}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Segundo Apellido</label>
                            <input type="text" class="form-control" name="segundo_a"
                                placeholder="Escriba su segundo apellido" pattern="[A-Za-z]{2-20}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dirección*</label>
                            <input type="text" class="form-control" pattern="{15,30}" name="direccionUsu" required
                                placeholder="Ingrese su direccion">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefono*</label>
                            <input type="number" pattern="[0-9!?-]{6,10}" class="form-control" name="telefono" required
                                placeholder="Ingese su telefono">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Usuario*</label>
                            <input type="email" class="form-control" pattern="[A-Za-z]{2-20}" name="usuario" required
                                placeholder="Ingrese su usuario">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contraseña*</label>
                            <input type="password" pattern="[0-9!?-]{6,10}" class="form-control" name="contrasena"
                                required placeholder="Ingrese su contraseña">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Rol*</label>
                            <select name="rol" class="form-control" required>
                                <option value="" selected>Selecciona...</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Cliente">Cliente</option>

                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Estado*</label>
                            <select name="estado" class="form-control" required>
                                <option value="" selected>Selecciona...</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                                </option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" value="agregar" name="metodo">
                    <button id="boton" type="submit" class="btn btn-info">Ingresar</button>
                    <a href="consulUsu.php"><button class="btn btn-info"
                            onclick="window.history.back()">Regresar</button></a>
                </form>
            </div>
        </div>
    </nav>
</body>
<?php include FOLDER_TEMPLATE . "scrips.php" ?>

</html>