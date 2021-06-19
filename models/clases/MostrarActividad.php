<?php 
require_once 'conexionDB.php';
class MostrarActividad  
{
    private function Query(){
        $query = "SELECT * FROM actividades";
        return $query;
    }

    public function Consulta(){
        $conexion = new conexionDB();
        $resultados = mysqli_query($conexion->EstablecerConexion(), $this->Query());
        return $resultados;
    }

}

?>