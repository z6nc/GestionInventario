<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudMenuModel.php'; // Incluye
$MenuModel = new MenuModel($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $NombreMenu = $_POST['NomMenu'];
   $PrecioMenu = $_POST['PrecioMenu'];
   $EstadoMenu = $_POST['EstadoMenu'];

   $existingMenuName = $MenuModel->CheckMenuName($NombreMenu);
   if ($existingMenuName) {
      header('Location: ../../src/Menu.php?error=MenuNameAlreadyExists');
      exit();
   } else {
      $result = $MenuModel->InsertMenu($NombreMenu, $PrecioMenu, $EstadoMenu, $conn);
      if ($result) {
         header('Location: ../../src/Menu.php?success=MenuRegisteredSuccessfully');
      } else {
         header('Location: ../../src/Menu.php?error=MenuNotRegisteredSuccessfull');
      }
   }

   $conn->close();
}
