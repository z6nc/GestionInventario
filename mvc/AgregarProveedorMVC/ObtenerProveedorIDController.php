<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexión a la base de datos
require 'CrudProveedorModel.php'; // Incluye el modelo

$IDPROVEEDOR = $_GET['IDPROVEEDOR']; // Obtiene el ID del menú de los parámetros de la URL

$ProveedorModel = new ProveedorModel($conn); // Crea una instancia del modelo
$ProveedorData = $ProveedorModel->getProveedorById($IDPROVEEDOR); // Obtiene los datos del menú

if ($ProveedorData) {
header("Location: ../../src/ProveedorEdit.php?IDPROVEEDOR=$IDPROVEEDOR&RAZON_SOCIAL={$ProveedorData['RAZON_SOCIAL']}&RUC={$ProveedorData['RUC']}");
exit;
}
else {
    header('Location: ../../src/Proveedor.php?error=ProveedorNotFound'); // Redirige si no se encuentra el menú
    exit;
}
   
$conn->close();


// No hay necesidad de redireccionar aquí
?>
