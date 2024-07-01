<?php
//require_once("../FTP/files-transference.php");
require_once("ListaProductos.php");

header('Location: ../../src/productos.php');
$listaProductos = new ListasProductos();
//$fileSender = new FileSenderFTP();
if(isset($_POST['submit-agregar-productos'])){    
   // $fileSender->saveFile($_FILES["fileToUpload"]["name"],$_FILES["fileToUpload"]["tmp_name"]);
    //$url_saved = $fileSender->getFileName();    
    $listaProductos->addNewProducto($_POST['nombre'],$_POST['fecha-ingreso'],$_POST['fecha-vencimiento'],
    $_POST['stock'],$_POST['precio'],$_POST['ubicacion'],$_POST['proveedor'],$_POST['categoria'],$_POST['url']);

}else if(isset($_POST['submit-editar-productos'])){
    /*if(!isset($_FILES["fileToUpload"])){
        header("Location: ../../src/productos-opciones.php?IDP={$_POST['ID']}&ERRF=1");
        exit();
    }

    $file_name = '';

    if($_FILES['fileToUpload'] !== $_POST['oldFile']){
        $fileSender->deleteFile($_POST['oldFile']);
        $file_name = $_FILES["fileToUpload"]["name"];
        $fileSender->saveFile($file_name,$_FILES["fileToUpload"]["tmp_name"]);
    }*/  

    $listaProductos->editProducto($_POST['nombre'],$_POST['fecha-ingreso'],$_POST['fecha-vencimiento'],
    $_POST['stock'],$_POST['precio'],$_POST['ubicacion'],$_POST['proveedor'],$_POST['categoria'],
    $_POST['url'],$_POST['ID']);    

}else if(isset($_POST['btn-delete'])){
    $listaProductos->removeProducto($_POST['btn-delete']);    
}else if(isset($_POST['btn-edit'])){
    header("Location: ../../src/productos-opciones.php?IDP={$_POST['btn-edit']}");
}else{
    header('Location: ../../src/Inicio.php');
}
