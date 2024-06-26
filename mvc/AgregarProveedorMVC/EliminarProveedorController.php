<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudProveedorModel.php'; // Incluye
 $IdProveedor = $_GET['IDPROVEEDOR'];
$ProveedorModel = new ProveedorModel($conn);

$result = $ProveedorModel->DeleteProveedor($IdProveedor , $conn);
if ($result) {
    header('Location: ../../src/Proveedor.php?success=ProveedorDeletedSuccessfully');
} else {
    header('Location: ../../src/Proveedor.php?error=ProveedorNotDeletedSuccessfull');
}

    $conn->close();

?>