<?php
include '../BD/Conexion.php'; 
require 'CategoriasModel.php'; 
$CategoriaModel = new CategoriasModel($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $NombreCategoria = $_POST['NomCat'];

   $existingCategoriaName = $CategoriaModel->CheckCategoriaName($NombreCategoria);
   if ($existingCategoriaName) {
      header('Location: ../../src/Categoria.php?success=Categoriaexist');
   } else {
      $result = $CategoriaModel->InsertCategoria($NombreCategoria, $conn);
      if ($result) {
         header('Location: ../../src/Categoria.php?success=CategoriaRegisteredSuccessfully');
      } else {
         header('Location: ../../src/Categoria.php?error=CategoriaNotRegisteredSuccessfull');
      }
   }

   $conn->close();
}
