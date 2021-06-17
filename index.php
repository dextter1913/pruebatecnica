<?php
session_start();
require_once 'views/assets/header.php';
require_once 'controllers/LoginController/LoginController.php';
$controlador = new LoginController();

//Condicion para logearse
if (isset($_GET['login']) && !isset($_SESSION['logeado'])) {
    $controlador->Login();
} elseif (isset($_SESSION['logeado'])) {
    require_once 'controllers/FuncionesController/FuncionesController.php';
    $funciones = new FuncionesController();
    $funciones->nav();
    if (isset($_GET['modulos'])) {
        switch ($_GET['modulos']) {
            case 'ver':
                echo "Ver";
                break;
            case 'crear':
                echo "Crear";
                $funciones->IngresarActividades();
                break;
            default:
                echo "Modulo no disponible";
                break;
        }
    }else {
        echo "Modulo no disponible";
    }
}

require_once 'views/assets/footer.php';
