


<?php
class Servicio {
    
    
    public function crearServicio($codigo,$descripcion,$estado){
        include 'conexion.php';
        echo "entro a servmodel";
        $insertar = "insert into servicios (codigo,descripcion,estado) values (".$codigo.",'".$descripcion."','".$estado."');";
        echo $insertar;
        $resultado = mysqli_query($conexion, $insertar);
        
        if ($resultado) {
            header("Location: ../../vistas/Servicios/CreaServicio.php");
            echo("Se registro correctamente");
            echo "<script language='JavaScript'> alert('Se registro el servicio correctamente'); location.assign('CreaUsu.php')</script>";
        }else{
            header("Location: ../../vistas/Servicios/CreaServicio.php");
            echo("No se registro correctamente");
        }
        
    }
    public function actuServicio($id,$codigo,$descripcion,$estado){
        include 'conexion.php';
        $actualizar = "call actualizar_servicio ('" . $id . "','" . $codigo . "','" . $descripcion . "','" . $estado . "')";
        echo "<script language='JavaScript'> alert('Se actualizo el servicio correctamente'); </script>";
        echo "<script language='JavaScript'> alert('$actualizar')</script>";
        echo $actualizar;
        $resultadoAc = mysqli_query($conexion, $actualizar);
        if ($resultadoAc) {
            header("Location: ../../vistas/servicios/consulServicio.php");
            echo("se actualizo correctamente");
        }else{
            header("Location: ../../vistas/servicios/consulServicio.php");
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