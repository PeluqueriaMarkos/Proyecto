<?php 
require ('../../config/conexion.php');
require ('../../Modelo/usuModel.php');
$idUsu = $_REQUEST['idUsuario'];
$Usu = new Usuario();
$Usu->inabUsuario($idUsu);
 ?>