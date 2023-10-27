<?php
require '../../config/conexion.php';
require '../../controlador/create/serv.php';

$codigo = $_POST['codigo'];
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$metodo = $_POST['metodo'];
$enviar = "registrar";
$Servicio = new ServicioControlador();


if ($metodo == "agregar") {
    $Servicio->creaServicio($codigo, $descripcion, $estado);
    //echo"<Script>alert('Usuario registrado')</script>";
    echo "<script language='JavaScript'> alert('Se registro el usuario correctamente'); location.assign('CreaUsu.php')</script>";
} elseif ($metodo == "actualizar") {
    $actualizar = "call actualizar_servicio ('" . $id . "','" . $codigo . "','" . $descripcion . "','" . $estado . "')";
    echo $actualizar;
    $resultadoAc = mysqli_query($conexion, $actualizar);

}

?>