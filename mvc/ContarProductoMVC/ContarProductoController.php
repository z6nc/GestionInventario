<?php 
require_once '../BD/Conexion.php'; 
require_once 'ContarProductoModel.php'; 
$ProductoContado = new ContarProductoModel($conn);

if ($ProductoContado) {
    $Totalproductos = $ProductoContado->ContarProducto();
} else {
    echo "Error al contar los productos";
}

?>