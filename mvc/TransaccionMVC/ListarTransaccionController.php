<?php
include 'CrudTransaccionModel.php';

$ListarTransaccion = new TransaccionModel($conn);
$ResultadoListarTransaccion = $ListarTransaccion->ListarTransaccion( );


$conn->close();
?>