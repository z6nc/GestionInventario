<?php
require_once 'CategoriasModel.php';
$ListarCategorias = new CategoriasModel($conn);
$opciones = $ListarCategorias->CategoriasArray();
?>
