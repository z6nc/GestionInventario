<?php
include 'CrudTransaccionModel.php';
$ListarTransaccion = new TransaccionModel($conn);
$value = isset($_GET['value']) ? (int)$_GET['value'] : 3;

$ResultadoListarTransaccion = $ListarTransaccion->ListarTransaccion($value );

$conn->close();
?>