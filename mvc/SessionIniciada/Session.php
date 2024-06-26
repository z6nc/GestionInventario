<?php
include '../mvc/BD/Conexion.php'; 
session_start();
$idusuario = $_SESSION['USUARIO'];
$apellido = $_SESSION['APELLIDO'];
$Jerarquia = $_SESSION['JERARQUIA'];



if (!isset($_SESSION['USUARIO'])) {
    header("Location: login.html"); 
}

?>