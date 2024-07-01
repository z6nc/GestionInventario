<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudTransaccionModel.php'; // Incluye
$TransaccionModel = new TransaccionModel($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $FechaCompra = $_POST['FechaCompra'];
   $IDProducto = $_POST['IDProducto'];
   $EstadoMenu = $_POST['EstadoMenu'];

      $result = $TransaccionModel->InsertTransaccion($FechaCompra, $IdProducto, $Stock, $Precio, $FechaCaducidad, $Estado);
      if ($result) {
         header('Location: ../../src/Menu.php?success=MenuRegisteredSuccessfully');
      } else {
         header('Location: ../../src/Menu.php?error=MenuNotRegisteredSuccessfull');
      }
   }

   $conn->close();
