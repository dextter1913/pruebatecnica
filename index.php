<?php require_once 'views/assets/header.php';

//Condicion para logearse
session_start();
if (isset($_SESSION['logeado'])) {
    
}else {
    require_once 'views/login.php';
}
require_once 'views/assets/footer.php'; ?>
