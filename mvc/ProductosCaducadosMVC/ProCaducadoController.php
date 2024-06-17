<?php 
require 'ProCaducadoModel.php'; // Incluye el modelo


$ProductoCaducidos = new ProductoCaducidoMode($conn); // Instancia la clase
$ResultadoProductoCaducidos = $ProductoCaducidos->ProductosCaducido(); // Obtiene los productos

?>
