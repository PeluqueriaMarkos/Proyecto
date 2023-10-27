<?php 

$idUsu = $_GET['id'];

require '../../config/conexion.php';
$eliminar="call eliminar_servicio ('".$idUsu."')";

$resultado = mysqli_query($conexion, $eliminar);
    echo "Se elimino correctamente". "<br>";
    header("Location: ../../vistas/servicios/consulServicio.php");
 ?>