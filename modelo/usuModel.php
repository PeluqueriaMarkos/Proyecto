


<?php
class Usuario {
    
    
    public function crearUsuario($idUsuario,$primer_n,$segundo_n,$primer_a,$segundo_a,$tipodoc,$direccionUsu,$telefono,$rol,$usuario,$contrasena,$estado){
        include 'conexion.php';
        echo "entro a usumodel";
        $insertar = "insert into personas (documento,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,tipo_documento,direccion,telefono,descripcion_rol, estado, usuario,contrasena) values (".$idUsuario.",'".$primer_n."','".$segundo_n."','".$primer_a."','".$segundo_a."','".$tipodoc."','".$direccionUsu."',".$telefono.",'".$rol."','".$estado."','".$usuario."','".$contrasena."');";
        $resultado = mysqli_query($conexion, $insertar);
        
        if ($resultado) {
            header("Location: ../../vistas/Personas/CreaUsu.php");
            echo("Se registro correctamente");
            echo "<script language='JavaScript'> alert('Se registro el usuario correctamente'); location.assign('CreaUsu.php')</script>";
        }else{
            header("Location: ../../vistas/Usuario/CreaUsu.php");
            echo("No se registro correctamente");
        }
        
    }
    public function actuUsuario($idUsuario,$primer_n,$segundo_n,$primer_a,$segundo_a,$tipodoc,$direccionUsu,$telefono,$usuario,$rol,$estado){
        include 'conexion.php';
        $actualizar = "call actualizar_persona ('" . $idUsuario . "','" . $primer_n . "','" . $segundo_n . "','" . $primer_a . "','" . $segundo_a . "','" . $tipodoc . "','" . $direccionUsu . "','" . $telefono . "','" . $usuario . "','" . $rol . "','" . $estado . "')";
        echo "<script language='JavaScript'> alert('Se actualizo el usuario correctamente'); </script>";
        echo "<script language='JavaScript'> alert('$actualizar')</script>";
        echo $actualizar;
        $resultadoAc = mysqli_query($conexion, $actualizar);
        if ($resultadoAc) {
            header("Location: ../../vistas/personas/consulUsu.php");
            echo("se actualizo correctamente");
        }else{
            header("Location: ../../vistas/personas/consulUsu.php");
            echo("no se actualizo correctamente");
        }
    }
    public function inabUsuario($idUsuario){
        include 'conexion.php';
        $eliminar="call elimUsu ('".$idUsuario."')";
        $resultado = mysqli_query($conexion, $eliminar);
        echo "Se elimino correctamente";
        header("Location: ../../vistas/Usuario/consulUsu.php");
    }
    public function habiUsuario($idUsuario){
        include 'conexion.php';
        $habilitar="call habiUsu ('".$idUsuario."')";
        $resultado = mysqli_query($conexion, $habilitar);
        echo "Se habilito correctamente";
        header("Location: ../../vistas/Usuario/consulUsu.php");
    }

    public function Consultar(){
        include 'conexion.php';
        $Consultar="select * from personas";
        $resultado = mysqli_query($conexion, $Consultar);
        echo "Consulta realizada";
        header("Location: ../../vistas/Usuario/consulUsu.php");
    }
}
?>