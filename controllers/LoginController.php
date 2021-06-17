<?php 
require_once 'models/autoload.php';
class LoginController  
{
    private $user;
    private $pass;

    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }
    public function ValidacionLogin(){
        $user = $this->user;
        $pass = $this->pass;
        $validacion = new ValidacionLogin($user ,$pass);
        $variable = $validacion->ConsultaUsuario()['user'];
        echo $variable;
        
    }
}

?>