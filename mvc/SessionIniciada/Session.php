<?php
require_once '../mvc/BD/Conexion.php'; 
session_start();
$idusuario = $_SESSION['USUARIO'];
if (!isset($idusuario)) {
    header('Location: ../mvc/login.html');
}

?>