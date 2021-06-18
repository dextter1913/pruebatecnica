<?php
session_start();
require_once 'views/assets/header.php';
require_once 'controllers/LoginController/LoginController.php';
$Login = new LoginController();

//Condicion para logearse
if (isset($_GET['login']) && !isset($_SESSION['logeado'])) {
    $Login->Login();
} elseif (isset($_SESSION['logeado'])) {
    require_once 'controllers/FuncionesController/FuncionesController.php';
    $funciones = new FuncionesController();
    $funciones->nav();
    if (isset($_GET['modulos'])) {
        switch ($_GET['modulos']) {
            case 'ver':
                echo "Ver";
                $funciones->VerActividades();
                break;
            case 'crear':
                echo "Crear";
                $funciones->IngresarActividades();
                break;
            case 'tiempos':
                echo "tiempos";
                if (isset($_POST['id'])) {
                    foreach ($_POST['id'] as $key) {
                        echo $key;
                        echo $_POST['fecha'];
                        echo $_POST['horas'];
                    }
                }
                break;
            default:
                echo "Modulo no disponible";
                break;
        }
    } else {
        echo "Modulo no disponible";
    }
}else {
    $Login->Login();
}

require_once 'views/assets/footer.php';
