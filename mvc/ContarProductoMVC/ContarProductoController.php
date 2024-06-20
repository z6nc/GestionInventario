<?php 
require 'ContarProductoModel.php'; // Incluye

$ProductosTotales = new ContarProductoModel($conn); // Instancia la clase

if ($ProductosTotales) {
    $Totalproductos = $ProductosTotales->ContarProducto();
} else {
    echo "Error al contar los productos";
}

?>