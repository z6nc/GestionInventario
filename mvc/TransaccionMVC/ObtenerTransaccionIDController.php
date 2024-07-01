<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexión a la base de datos
require 'TransaccionModel.php'; // Incluye el modelo

$IDTransccion = $_GET['ID_TRANSACCION']; // Obtiene el ID del menú de los parámetros de la URL

$TransaccionModel = new TransaccionModel($conn); // Crea una instancia del modelo
$menuData = $TransaccionModel->getTransaccionesById($IDTransccion); // Obtiene los datos del menú

if ($menuData) {
header("Location: ../../src/Transaccion.php?ID_TRANSACCION=$IDTransccion&IDPRODUCTO={$menuData['IDPRODUCTO']}&NOM_PRODUCTO={$menuData['NOM_PRODUCTO']}&FECHA_COMPRA={$menuData['FECHA_COMPRA']}&STOCK={$menuData['STOCK']}&PRECIO={$menuData['PRECIO']}&FECHA_CADUCIDAD={$menuData['FECHA_CADUCIDAD']}&MONTO_TOTAL={$menuData['MONTO_TOTAL']}&ESTADO={$menuData['ESTADO']}"); // Redirige con los datos del menú
exit;
}
else {
    header('Location: ../../src/Transaccion.php?error=TransaccionNotFound'); // Redirige si no se encuentra el menú
    exit;
}
   
$conn->close();


// No hay necesidad de redireccionar aquí
?>
