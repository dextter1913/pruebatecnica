<?php 
require_once 'conexionDB.php';
    class IngresarActividad  
    {   
        private $nombreactividad;
        private $actividad;
        private $user;

        public function __construct($nombreactividad, $actividad, $user) {
            $this->nombreactividad = $nombreactividad;
            $this->actividad = $actividad;
            $this->user = $user;
        }

        public function InsertActividad(){
            $conexion = new conexionDB();
            $actividad = $this->actividad;
            $nombreactividad = $this->nombreactividad;
            $user = $this->user;
            $conexion->EstablecerConexion()->query("INSERT INTO actividades(NombreActividad, descripcionActividad, user) VALUES('$nombreactividad','$actividad','$user')");
        }
    }
    
?>