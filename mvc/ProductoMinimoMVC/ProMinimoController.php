<?php 
require 'ProMinimoModel.php'; // Incluye el modelo


$ProductoMininimoStock = new ProductoMinimoMode($conn); // Instancia la clase
$ResultadoProductosStock = $ProductoMininimoStock->ProductosMinimoStock(); // Obtiene los productos

if (!$ResultadoProductosStock) {
    echo "Error al obtener los productos.";
}
?>
