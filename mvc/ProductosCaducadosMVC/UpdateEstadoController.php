<?php
require 'ProCaducadoModel.php'; 
include '../BD/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idTransaccion = $_POST['ID_TRANSACCION'];
}
$UpdateEstado = new ProductoCaducidoMode($conn);
$UpdateEstado->UpdateEstado($idTransaccion);
header('Location: ../../src/inicio.php?success=UpdateEstado');
?>