<?php 
require_once 'conexionDB.php';
class MostrarActividad  
{   
    private $user;
    public function __construct($user) {
        $this->user = $user;
    }
    private function Query(){
        $user = $this->user;
        $query = "SELECT * FROM actividades WHERE user = '$user'";
        return $query;
    }

    public function Consulta(){
        $conexion = new conexionDB();
        $resultados = mysqli_query($conexion->EstablecerConexion(), $this->Query());
        return $resultados;
    }

}

?>