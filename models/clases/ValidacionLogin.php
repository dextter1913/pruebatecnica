<?php 
require_once 'conexionDB.php';
class ValidacionLogin  
{
    private $user;
    private $pass;

    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    private function Query(){
        $user = $this->user;
        $pass = $this->pass;
        $query = "SELECT * FROM Usuarios WHERE user = '$user' AND pass = '$pass'";
        return $query;
    }

    public function ConsultaUsuario(){
        $conexion = new conexionDB();
        $consulta = mysqli_query($conexion->EstablecerConexion(), $this->Query());
        $rows = mysqli_fetch_array($consulta);
        return $rows;
    }

}
?>