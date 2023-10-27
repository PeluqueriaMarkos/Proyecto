<?php
require '../../config/conexion.php';
require '../../controlador/create/usu.php';

$idUsuario = $_POST['documento'];
$primer_n = $_POST['primer_n'];
$segundo_n = $_POST['segundo_n'];
$primer_a = $_POST['primer_a'];
$segundo_a = $_POST['segundo_a'];
$tipodoc = $_POST['tipodoc'];
$direccionUsu = $_POST['direccionUsu'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$estado = $_POST['estado'];
$metodo = $_POST['metodo'];
$enviar = "registrar";
$Usuario = new UsuarioControlador();


if ($metodo == "agregar") {
    $Usuario->crearUsuario($idUsuario, $primer_n, $segundo_n, $primer_a, $segundo_a, $tipodoc, $direccionUsu, $telefono, $usuario, $contrasena, $rol,$estado);
    //echo"<Script>alert('Usuario registrado')</script>";
    echo "<script language='JavaScript'> alert('Se registro el usuario correctamente'); location.assign('CreaUsu.php')</script>";
} elseif ($metodo == "actualizar") {
    $actualizar = "call actualizar_persona ('" . $idUsuario . "','" . $primer_n . "','" . $segundo_n . "','" . $primer_a . "','" . $segundo_a . "','" . $tipodoc . "','" . $direccionUsu . "','" . $telefono . "','" . $usuario . "','" . $rol . "','" . $estado . ")";
    $resultadoAc = mysqli_query($conexion, $actualizar);

}


?>