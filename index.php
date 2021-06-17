<?php 
session_start();
require_once 'views/assets/header.php';
require_once 'controllers/LoginController.php';
$controlador = new LoginController();

//Condicion para logearse

if (isset($_GET['login']) && !isset($_SESSION['logeado'])) {
    $controlador->Login();
}elseif (isset($_SESSION['logeado'])) {
    echo "Bienvenido";
}

require_once 'views/assets/footer.php'; ?>
