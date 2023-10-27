<?php 
require ('../../config/conexion.php');
require ('../../modelo/servModel.php');

$codigo = $_POST['codigo'];
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$metodo = $_POST['metodo'];
$enviar = "registrar";
$serv = new Servicio();


if ($metodo=="agregar") {
    $serv->crearServicio($codigo,$descripcion,$estado);
    echo "<script language='JavaScript'> alert('Se registro el servicio correctamente'); location.assign('CreaUsu.php')</script>";
    
}elseif ($metodo=="actualizar") {
    
    $serv->actuServicio($id,$codigo,$descripcion,$estado);
    echo "<script language='JavaScript'> alert('Se actualizo el servicio correctamente'); </script>";
}
    

?>