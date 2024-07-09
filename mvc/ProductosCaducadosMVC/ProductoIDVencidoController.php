<?php
require 'ProCaducadoModel.php'; // Incluye el modelo
include '../BD/Conexion.php';
$ID_TRANSACCION = $_GET['ID_TRANSACCION'];
$ProductosCaducadoID = new ProductoCaducidoMode($conn); // Instancia la clase
$ResultadoProductosCaducadoID = $ProductosCaducadoID->ProductosCaducadoID($ID_TRANSACCION); 

if ($ResultadoProductosCaducadoID) {
  header("Location: ../../src/inicio.php?ID_TRANSACCION=$ID_TRANSACCION&NOM_PRODUCTO={$ResultadoProductosCaducadoID['NOM_PRODUCTO']}&URL_IMG={$ResultadoProductosCaducadoID['URL_IMG']}");
  
}else{
    header('Location: ../../src/inicio.php?error=NotFound'); // Redirige si no se encuentra el menú
    exit;
}
$conn->close();
?>