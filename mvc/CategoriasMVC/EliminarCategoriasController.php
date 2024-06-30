<?php
include '../BD/Conexion.php'; 
require_once 'CategoriasModel.php'; 
$CategoriaModel = new CategoriasModel($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $NombreCategoria = $_POST['NomCat'];

   $existingCategoriaName = $CategoriaModel->CheckCategoriaName($NombreCategoria);
   if ($existingCategoriaName) {
      $result = $CategoriaModel->DeleteCategoria($NombreCategoria, $conn);
      if($result){
         header('Location: ../../src/Categoria.php?success=CategoriaDeletedSuccessfully');
      }else{
         header('Location: ../../src/Categoria.php?error=CategoriaNotDeletedSuccessfull');
      }
   } else {
      header('Location: ../../src/Categoria.php?error=CategoriaNotDeletedSuccessfull');
   }

   $conn->close();
}
