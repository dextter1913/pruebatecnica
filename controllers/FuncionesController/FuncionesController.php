<?php
require_once 'models/autoload.php';
class FuncionesController
{
    public function nav()
    {
        require_once 'views/nav/nav.php';
    }

    //formulario para ingresar Actividades
    public function IngresarActividadesController()
    {
        require_once 'views/frmCrearActividad/frmCrearActividad.php';
        if (isset($_POST['btnIngresarActividad'])) {
            $ingresar = new IngresarActividad($_POST['nombreactividad'], $_POST['actividad']);
            $ingresar->InsertActividad();
            require_once 'views/tbActividades/mensaje.php';
        }
    }
    //Ver actividades
    public function VerActividadesController()
    {
        $consulta = new MostrarActividad();
        $resultado = $consulta->Consulta();
        require_once 'views/tbActividades/tbActividades.php';
    }

    //insertar tiempos desde Actividades
    public function InsertarTiemposController($fecha, $horas, $user, $idActividad)
    {
        $insertarTiempos = new InsertarTiempos($fecha, $horas, $user, $idActividad);
        $insertarTiempos->InsertarTiemposModel();
    }

    //Ver tiempos
    public function VertiemposController()
    {   
        $mostrartiempos = new MostrarTiempos($_SESSION['logeado']);
        $consulta = $mostrartiempos->Consulta();
        require_once 'views/tbTiempos/tbTiempos.php';
    }
}
