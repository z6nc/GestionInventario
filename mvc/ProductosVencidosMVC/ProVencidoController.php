<?php 
require 'ProVencidoModel.php'; // Incluye

$ProductosVencer = new ProductoPorVencerModel($conn); // Instancia la clase

if ($ProductosVencer) {
    $ProductoVencimientos = $ProductosVencer->VencerProducto();
} else {
    echo "Error al contar los productos";
}


?>