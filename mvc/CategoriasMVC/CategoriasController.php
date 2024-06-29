<?php
include 'CategoriasModel.php';
$ListarCategorias = new CategoriasModel($conn);
$opciones = $ListarCategorias->CategoriasArray();
?>