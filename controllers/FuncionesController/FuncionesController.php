<?php 
require_once 'models/autoload.php';
class FuncionesController  
{
    public function nav(){
        require_once 'views/nav/nav.php';
    }

    public function IngresarActividades(){
        require_once 'views/frmCrearActividad/frmCrearActividad.php';
        if (isset($_POST['btnIngresarActividad'])) {
            $ingresar = new IngresarActividad($_POST['actividad']);
            $ingresar->InsertActividad();
        }
    }

    public function VerActividades(){
        $consulta = new MostrarActividad();
        $resultado = $consulta->Consulta();
        require_once 'views/tblActividades/tblActividades.php';

    }
}

?>