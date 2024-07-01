<?php
include 'CrudTransaccionModel.php';
$ListarIdProducto = new TransaccionModel($conn);
$ResultadoListarProductos = $ListarIdProducto->listarProductos();
?>