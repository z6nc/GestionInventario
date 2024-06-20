<?php
include 'ListMenuModel.php';
$ListarMenu = new ListarMenuMode($conn);
$ResultadoListarMenu = $ListarMenu->ListarMenu();
?>