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

    private function SumaTiempos(){
        $fecTiempos = $this->fecTiempos;
        $user = $this->user;
        $conexion = new conexionDB();
        $consultahoras = mysqli_query($conexion->EstablecerConexion(),"SELECT SUM(cantHoras) FROM tiempos WHERE fecTiempos = '$fecTiempos' AND user = '$user'");
        $suma = mysqli_fetch_assoc($consultahoras);
        return $suma;
    }
    
    public function InsertarTiemposModel(){
        $fecTiempos = $this->fecTiempos;
        $cantHoras = $this->cantHoras;
        $user = $this->user;
        $idActividad = $this->idActividad;
        $conexion = new conexionDB();
        
        $sumaint = intval($this->SumaTiempos()['SUM(cantHoras)']);//convirtiendo la suma de el query en un entero
        if ($sumaint == null && $cantHoras < 8) {
            $conexion->EstablecerConexion()->query("INSERT INTO tiempos(fecTiempos, cantHoras, user, idActividad) VALUES('$fecTiempos','$cantHoras','$user','$idActividad')");
        }elseif($sumaint <= 8) {
            $total = $sumaint + $cantHoras;
            if ($total <= 8 ) {
                $conexion->EstablecerConexion()->query("INSERT INTO tiempos(fecTiempos, cantHoras, user, idActividad) VALUES('$fecTiempos','$cantHoras','$user','$idActividad')");
            }else {
                session_start();
                $_SESSION['Error'] = "No puede ingresar mas de 8 horas";
        }
        }
    }
}


?>