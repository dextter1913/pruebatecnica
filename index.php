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
                $funciones->VerActividadesController();
                break;
            case 'crear':
                $funciones->IngresarActividadesController();
                break;
            case 'tiempos':
                if (isset($_POST['id']) && !empty($_POST['id'])) {
                    foreach ($_POST['id'] as $idActividad) {
                        $funciones->InsertarTiemposController($_POST['fecha'], $_POST['horas'], $_SESSION['logeado'], $idActividad);
                    }
                }
                $funciones->VertiemposController();
                break;
            case 'matar':
                $funciones->MatarSesion();
                break;
            case 'cv':
                $funciones->VerCV();
                break;
            default:
                echo "Modulo no disponible";
                break;
        }
    } else {
        echo "Modulo no disponible";
    }
} else {
    $Login->Login();
}

require_once 'views/assets/footer.php';
