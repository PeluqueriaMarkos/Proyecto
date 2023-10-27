<?php 
require ('../../config/conexion.php');
require ('../../modelo/citModel.php');

$id = $_POST['id'];
$fecha = $_POST['fecha'];
$empleado = $_POST['Empleado'];
$cliente = $_POST['Cliente'];
$servicio = $_POST['Servicio'];
$estado = $_POST['estado'];
$metodo = $_POST['metodo'];
$enviar = "registrar";
$Cita = new Cita();


if ($metodo=="agregar") {
    $Cita->crearCita($fecha,$empleado,$cliente,$servicio,$estado);
    echo "<script language='JavaScript'> alert('Se registro la cita correctamente'); location.assign('CreaCitas.php')</script>";
    
}elseif ($metodo=="actualizar") {
    
    $Cita->actuUsuario($id,$primer_n,$segundo_n,$primer_a,$segundo_a,$tipodoc,$direccionUsu,$telefono,$usuario,$rol,$estado);
    echo "<script language='JavaScript'> alert('Se actualizo la cita correctamente'); </script>";
}
    

?>