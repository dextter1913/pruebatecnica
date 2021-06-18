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


        
        $consultahoras = mysqli_query($conexion->EstablecerConexion(),"SELECT SUM(cantHoras) FROM tiempos WHERE fecTiempos = '$fecTiempos' AND user = '$user'");
        $suma = mysqli_fetch_assoc($consultahoras);

        $sumaint = intval($suma['SUM(cantHoras)']);//convirtiendo la suma de el query en un entero
        if ($sumaint == null && $cantHoras < 8) {
            $conexion->EstablecerConexion()->query("INSERT INTO tiempos(fecTiempos, cantHoras, user, idActividad) VALUES('$fecTiempos','$cantHoras','$user','$idActividad')");
        }elseif($sumaint <= 8) {
            $total = $sumaint + $cantHoras;
            if ($total <= 8 ) {
                $conexion->EstablecerConexion()->query("INSERT INTO tiempos(fecTiempos, cantHoras, user, idActividad) VALUES('$fecTiempos','$cantHoras','$user','$idActividad')");
            }
        }else {
            return 'Superaste las 8 horas del dia';
        }

            
        

    }
}


?>