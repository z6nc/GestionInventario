<?php
require_once("../FTP/files-transference.php");
require_once("ListaProductos.php");

$listaProductos = new ListasProductos();
$fileSender = new FileSenderFTP();
if(isset($_POST['submit-agregar-productos']) && isset($_FILES["fileToUpload"])){    
    $fileSender->saveFile($_FILES["fileToUpload"]["name"],$_FILES["fileToUpload"]["tmp_name"]);
    $url_saved = $fileSender->getPathSaved();
    
    $listaProductos->addNewProducto($_POST['nombre'],$_POST['fecha-ingreso'],$_POST['fecha-vencimiento'],
    $_POST['stock'],$_POST['precio'],$_POST['ubicacion'],$_POST['proveedor'],$_POST['categoria'],$url_saved);

    header('Location: ../../src/productos.php');
}else if(isset($_POST['submit-editar-productos']) && isset($_FILES["fileToUpload"])){
    $fileSender->deleteFile($_POST['oldFile']);
    $fileSender->saveFile($_FILES["fileToUpload"]["name"],$_FILES["fileToUpload"]["tmp_name"]);
    $url_saved = $fileSender->getPathSaved();
    $listaProductos->editProducto($_POST['nombre'],$_POST['fecha-ingreso'],$_POST['fecha-vencimiento'],
    $_POST['stock'],$_POST['precio'],$_POST['ubicacion'],$_POST['proveedor'],$_POST['categoria'],$url_saved);
    header('Location: ../../src/productos.php');
}else if(isset($_POST['btn-delete'])){
    $listaProductos->removeProducto($_POST['btn-delete']);
    header('Location: ../../src/productos.php');
}else if(isset($_POST['btn-edit'])){
    header("Location: ../../src/productos-opciones.php?IDP={$_POST['btn-edit']}");
}else{
    header('Location: ../../src/Inicio.php');
}

