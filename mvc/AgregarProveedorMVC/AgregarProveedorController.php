<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudProveedorModel.php'; // Incluye
$ProveedorModel = new ProveedorModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NombreProveedor = $_POST['NomProveedor'];
    $RucProveedor = $_POST['RucProveedor'];


    $result = $ProveedorModel->InsertProveedor($NombreProveedor , $RucProveedor,$conn);
    if ($result) {
       header('Location: ../../src/Proveedor.php?success=ProveedorRegisteredSuccessfully');
       
    } else{
       header('Location: ../../src/Proveedor.php?error=ProveedorNotRegisteredSuccessfull');
    }

    $conn->close();
     
}



?>