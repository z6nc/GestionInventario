<?php 
require 'ProMinimoModel.php'; // Incluye el modelo


$ProductoMininimoStock = new ProductoMinimoMode($conn); // Instancia la clase
$ResultadoProductosStock = $ProductoMininimoStock->ProductosMinimoStock(); // Obtiene los productos


?>
