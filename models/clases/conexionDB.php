<?php 
    class conexionDB  
    {
        private $host;
        private $user;
        private $pass;
        private $db;
        

        public function __construct($host = 'localhost', $user = 'root', $pass = '', $db = 'Actividades') {
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
        }

        public function EstablecerConexion(){
            $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
            error_reporting(0);
            if ($conexion->connect_errno) {
                print 'Lo sentimos hubo un error';
            }else {
                return $conexion;
            }            
        }
    }
    
?>