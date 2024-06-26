<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudProveedorModel.php'; // Incluye
$ProveedorModel = new ProveedorModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IDProveedor = $_POST['IDProveedor'];
    $NomProveedor = $_POST['NomProveedor'];
    $RucProveedor = $_POST['RucProveedor'];


    $result = $ProveedorModel->UpdateProveedor($IDProveedor, $NomProveedor, $RucProveedor, $conn);
    if ($result) {
       header('Location: ../../src/Proveedor.php?success=ProveedorEdited');
       
    } else{
       header('Location: ../../src/Proveedor.php?error=ProveedorNotProveedorEdited');
    }

    $conn->close();
     
}



?>