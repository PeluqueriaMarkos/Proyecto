<?php 

$idUsu = $_GET['id'];

require '../../config/conexion.php';
$eliminar="call eliminar_persona ('".$idUsu."')";

$resultado = mysqli_query($conexion, $eliminar);
    echo "Se elimino correctamente". "<br>";
    header("Location: ../../vistas/personas/consulUsu.php");
 ?>