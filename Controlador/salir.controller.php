<?php
	# Iniciar sesión (sí, aunque la vamos a destruir, primero se debe iniciar)
	session_start();
	# Después, destruirla
	# Eso va a eliminar todo lo que haya en $_SESSION
	session_destroy();
	# Finalmente lo redireccionamos a la página ingresar.php
	
	class SalirController 
							{
    
    //PRIMERA PÁGINA QUE CARGA
    	public function Carga(){
        require_once 'view/header.php';
        require_once 'view/ingresar.php';
        require_once 'view/footer.php';
    }
    }
	
?>