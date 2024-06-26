<?php
include 'ListProveedorModel.php';
$ListarProveedor = new ListarProveedorMode($conn);
$ResultadoListarProveedor = $ListarProveedor->ListarProveedor();
?>