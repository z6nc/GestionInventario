<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudTransaccionModel.php'; // Incluye
$TransaccionModel = new TransaccionModel($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $FechaCompra = $_POST['FechaCompra'];
   $IDProducto = $_POST['IDProducto'];
   $StockProducto = $_POST['StockProducto'];
   $Precio = $_POST['Precio'];
    $FechaCaducidad = $_POST['FechaCaducidad'];
    $Estado = $_POST['EstadoTransaccion'];

      $result = $TransaccionModel->InsertTransaccion($FechaCompra, $IDProducto, $StockProducto, $Precio, $FechaCaducidad, $Estado);
      if ($result) {
         header('Location: ../../src/Transaccion.php?success=TransaccionRegisteredSuccessfully');
      } else {
         header('Location: ../../src/Transaccion.php?errorTransaccionNotRegisteredSuccessfull');
      }
   }

   $conn->close();
