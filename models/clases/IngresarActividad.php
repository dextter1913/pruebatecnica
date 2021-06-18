<?php 
require_once 'conexionDB.php';
    class IngresarActividad  
    {   
        private $nombreactividad;
        private $actividad;

        public function __construct($nombreactividad, $actividad) {
            $this->nombreactividad = $nombreactividad;
            $this->actividad = $actividad;
        }

        public function InsertActividad(){
            $conexion = new conexionDB();
            $actividad = $this->actividad;
            $nombreactividad = $this->nombreactividad;
            $conexion->EstablecerConexion()->query("INSERT INTO actividades(NombreActividad, descripcionActividad) VALUES('$nombreactividad','$actividad')");
        }
    }
    
?>