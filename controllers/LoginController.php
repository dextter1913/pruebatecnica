<?php
require_once 'models/autoload.php';
class LoginController
{
    public function Login()
    {
        require_once 'views/login.php';
        if (isset($_POST['btningresar'])) {
            $validacion = new ValidacionLogin($_POST['user'], $_POST['pass']);
            if ($validacion->ConsultaUsuario()) {
                $variable = $validacion->ConsultaUsuario()['user'];
                session_start();
                $_SESSION['logeado'] = $variable;
            }
        }
    }
}
