<?php 
require_once 'conexionDB.php';
    class IngresarActividad  
    {
        private $actividad;

        public function __construct($actividad) {
            $this->actividad = $actividad;
        }

        public function InsertActividad(){
            $conexion = new conexionDB();
            $actividad = $this->actividad;
            $conexion->EstablecerConexion()->query("INSERT INTO actividades(descripcionActividad) VALUES('$actividad')");
        }
    }
    
?>