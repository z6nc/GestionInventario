<?php 
require 'ProductoAñadidoModel.php'; // Incluye el modelo


$ProductosAñadidosModel = new ProductoAñadidoMode($conn); // Instancia la clase
$ResultadoProducto = $ProductosAñadidosModel->productosAñadidos(); // Obtiene los productos

?>
