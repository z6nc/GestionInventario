<?php 
require 'DashBoardModel.php'; 

$ProductosMayoresStock = new DashBoardModel($conn); // Instancia la clase
$ResultadoProductosMayoresStock = $ProductosMayoresStock->ProductosMayorStock();


$conn->close();
?>