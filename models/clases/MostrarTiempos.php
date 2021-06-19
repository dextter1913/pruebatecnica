<?php 
require_once 'conexionDB.php';
    class MostrarTiempos  
    {
        private $user;

        public function __construct($user) {
            $this->user = $user;
        }

        private function Query(){
            $user = $this->user;
            $query = "SELECT * FROM tiempos WHERE user = '$user'";
            return $query;
        }

        public function Consulta(){
            $conexion = new conexionDB();
            $resultado = mysqli_query($conexion->EstablecerConexion(), $this->Query());
            return $resultado;
        }

    }
    
?>