<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudMenuModel.php'; // Incluye
 $IdMenu = $_GET['IDMENU'];
$MenuModel = new MenuModel($conn);

$result = $MenuModel->DeleteMenu($IdMenu , $conn);
if ($result) {
    header('Location: ../../src/Menu.php?success=MenuDeletedSuccessfully');
} else {
    header('Location: ../../src/Menu.php?error=MenuNotDeletedSuccessfull');
}

    $conn->close();

?>