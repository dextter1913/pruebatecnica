<?php 
class FuncionesController  
{
    public function nav(){
        require_once 'views/nav/nav.php';
    }

    public function IngresarActividades(){
        require_once 'views/frmCrearActividad/frmCrearActividad.php';
    }
}

?>