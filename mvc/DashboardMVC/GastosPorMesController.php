<?php 
require_once 'DashBoardModel.php'; 
$GastosPorMes = new DashBoardModel($conn); // Instancia la clase
$ResultadoGastoPorMes = $GastosPorMes->GastoPorMes();

?>