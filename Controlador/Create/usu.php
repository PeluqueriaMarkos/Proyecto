<?php 
require ('../../config/conexion.php');
require ('../../modelo/usuModel.php');

$idUsuario = $_POST['documento'];
$id = $_POST['id'];
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
$Usu = new Usuario();


if ($metodo=="agregar") {
    $Usu->crearUsuario($idUsuario,$primer_n,$segundo_n,$primer_a,$segundo_a,$tipodoc,$direccionUsu,$telefono,$rol,$usuario,$contrasena,$estado);
    echo "<script language='JavaScript'> alert('Se registro el usuario correctamente'); location.assign('CreaUsu.php')</script>";
    
}elseif ($metodo=="actualizar") {
    
    $Usu->actuUsuario($id,$primer_n,$segundo_n,$primer_a,$segundo_a,$tipodoc,$direccionUsu,$telefono,$usuario,$rol,$estado);
    echo "<script language='JavaScript'> alert('Se actualizo el usuario correctamente'); </script>";
}
    

?>