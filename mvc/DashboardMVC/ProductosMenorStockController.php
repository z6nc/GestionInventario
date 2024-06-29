<?php 
require_once 'DashBoardModel.php'; 
$ProductosMenorStock = new DashBoardModel($conn); // Instancia la clase
$ResultadoProductosMenorStock = $ProductosMenorStock->ProductosPocoStock();

?>