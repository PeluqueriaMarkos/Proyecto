<?php 
$bd_host="localhost";
$bd_user="root";
$bd_pass="";
$bd_name="sdb_markos";

$conexion=mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name);
if (mysqli_connect_errno()) {
	echo "La conexion a la base de datos fue incorrecta" ;
}
?>

