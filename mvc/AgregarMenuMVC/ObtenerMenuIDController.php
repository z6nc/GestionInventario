<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexión a la base de datos
require 'CrudMenuModel.php'; // Incluye el modelo

$IDMENU = $_GET['IDMENU']; // Obtiene el ID del menú de los parámetros de la URL

$MenuModel = new MenuModel($conn); // Crea una instancia del modelo
$menuData = $MenuModel->getMenuById($IDMENU); // Obtiene los datos del menú

if ($menuData) {
header("Location: ../../src/MenuEdit.php?IDMENU=$IDMENU&NOMBRE_MENU={$menuData['NOMBRE_MENU']}&PRECIOVENTA={$menuData['PRECIOVENTA']}&EstadoMenu={$menuData['EstadoMenu']}");
exit;
}
else {
    header('Location: ../../src/Menu.php?error=MenuNotFound'); // Redirige si no se encuentra el menú
    exit;
}
   
$conn->close();


// No hay necesidad de redireccionar aquí
?>
