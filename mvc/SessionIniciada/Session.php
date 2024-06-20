<?php
include '../mvc/BD/Conexion.php'; 
session_start();
$idusuario = $_SESSION['USUARIO'];

if (!isset($_SESSION['USUARIO'])) {
    header("Location: login.html"); 
}

?>