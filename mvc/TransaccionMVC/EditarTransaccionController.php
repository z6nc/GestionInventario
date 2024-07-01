<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudTransaccionModel.php'; // Incluye
$TransaccionModel = new TransaccionModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $FechaCompra = $_POST['FechaCompra'];
    $ProductoID = $_POST['ProductoID'];
    $Stock = $_POST['Stock'];
    $Precio = $_POST['Precio'];
    $FechaCaducidad = $_POST['FechaCaducidad'];
    $Estado = $_POST['Estado'];
    $IDTransaccion = $_POST['IDTransaccion'];

    $result = $TransaccionModel->UpdateTransacciones($FechaCompra, $ProductoID, $Stock, $Precio ,$FechaCaducidad, $Estado, $IDTransaccion);
    if ($result) {
       header('Location: ../../src/Transaccion.php?success=TransaccionEdited');
       
    } else{
       header('Location: ../../src/Transaccion.php?error=TransaccionNotTransaccionEdited');
    }

    $conn->close();
     
}



?>