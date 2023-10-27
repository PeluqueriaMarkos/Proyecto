
<?php 
require 'conexion.php';
if (!empty($_POST)) {
     $idUser = $_POST["idUsu"];
     $passUsu =$_POST ["passUsu"];
     $consulta = "SELECT * FROM personas WHERE USUARIO = '".$idUser."' and CONTRASENA = '".$passUsu."' and ESTADO = 'activo';";
     $ingresar = mysqli_query($conexion, $consulta);
     $fila = $ingresar->fetch_assoc();

     if ($ingresar->num_rows>0) {
          session_start();
          $_SESSION['usuario']=$fila['nombreUsuario'];
          $_SESSION['rolUsuario']=$fila['descripcion_rol'];
          $_SESSION['id']=$fila['id'];
          header("Location: ../indexUsuario.php");

     } else {
          header("Location: ../vistas/Personas/ingresar.php");
     	echo "No eres bienvenido / Usuario o contraseña incorrectos";
     }

}
 ?>