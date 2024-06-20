<?php 
require 'ProVencidoModel.php'; // Incluye

$ProductosVencer = new ProductoPorVencerModel($conn); // Instancia la clase
$ProductoVencimientos = $ProductosVencer->VencerProducto();



?>