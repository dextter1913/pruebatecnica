<?php 
require_once 'conexionDB.php';
class InsertarTiempos  
{
    private $fecTiempos;
    private $cantHoras;
    private $user;
    private $idActividad;

    public function __construct($fecTiempos, $cantHoras, $user, $idActividad) {
        $this->fecTiempos = $fecTiempos;
        $this->cantHoras = $cantHoras;
        $this->user = $user;
        $this->idActividad = $idActividad;
    }

    public function InsertarTiemposModel(){
        $fecTiempos = $this->fecTiempos;
        $cantHoras = $this->cantHoras;
        $user = $this->user;
        $idActividad = $this->idActividad;
        $conexion = new conexionDB();
        $conexion->EstablecerConexion()->query("INSERT INTO tiempos(fecTiempos, cantHoras, user, idActividad) VALUES('$fecTiempos','$cantHoras','$user','$idActividad')");
    }
}


?>