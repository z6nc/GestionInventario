<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudMenuModel.php'; // Incluye
$MenuModel = new MenuModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IDMenu = $_POST['IDMenu'];
    $NombreMenu = $_POST['NomMenu'];
    $PrecioMenu = $_POST['PrecioMenu'];
    $EstadoMenu = $_POST['EstadoMenu'];


    $result = $MenuModel->UpdateMenu($IDMenu,$NombreMenu , $PrecioMenu, $EstadoMenu,$conn);
    if ($result) {
       header('Location: ../../src/Menu.php?success=MenuEdited');
       
    } else{
       header('Location: ../../src/Menu.php?error=MenuNotMenuEdited');
    }

    $conn->close();
     
}



?>