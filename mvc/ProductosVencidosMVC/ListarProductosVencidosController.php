<?php 
require 'ProVencidoModel.php'; // Incluye

$ProductosListarVencer = new ProductoPorVencerModel($conn); // Instancia la clase
$ResultadoProductoVencidos = $ProductosListarVencer->ListarVencerProducto();



?>