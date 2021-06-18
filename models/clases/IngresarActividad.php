<?php 
require_once 'conexionDB.php';
    class IngresarActividad  
    {   
        private $nombreactividad;
        private $actividad;

        public function __construct($actividad, $nombreactividad) {
            $this->actividad = $actividad;
            $this->nombreactividad = $nombreactividad;
        }

        public function InsertActividad(){
            $conexion = new conexionDB();
            $actividad = $this->actividad;
            $nombreactividad = $this->nombreactividad;
            $conexion->EstablecerConexion()->query("INSERT INTO actividades(descripcionActividad) VALUES('$nombreactividad','$actividad')");
        }
    }
    
?>