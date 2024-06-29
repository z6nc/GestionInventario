<?php 
require_once 'DashBoardModel.php'; 

$ProductosMayoresStock = new DashBoardModel($conn); // Instancia la clase
$ResultadoProductosMayoresStock = $ProductosMayoresStock->ProductosMayorStock();


?>