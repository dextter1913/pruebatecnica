<?php require_once 'views/assets/header.php';

//Condicion para logearse
    echo "<h1>Bienvenido<h1>";

    require_once 'views/login.php';
    if (isset($_POST['btningresar'])) {
        require_once 'controllers/LoginController.php';
        $validacion = new Logincontroller($_POST['user'], $_POST['pass']);
        $session = $validacion->ValidacionLogin();
    }
   require_once 'views/assets/footer.php'; ?>
