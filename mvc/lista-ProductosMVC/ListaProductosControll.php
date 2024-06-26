<?php
require_once("../FTP/files-transference.php");
require_once("ListaProductos.php");
if(isset($_POST['submit-agregar-productos']) && isset($_FILES["fileToUpload"])){
    $fileSender = new FileSenderFTP();
    $listaProductos = new ListasProductos();
    $fileSender->saveFile($_FILES["fileToUpload"]["name"],$_FILES["fileToUpload"]["tmp_name"]);
    $url_saved = $fileSender->getPathSaved();
    
    $listaProductos->addNewProducto($_POST['nombre'],$_POST['fecha-ingreso'],$_POST['fecha-vencimiento'],
    $_POST['stock'],$_POST['precio'],$_POST['ubicacion'],$_POST['proveedor'],$_POST['categoria'],$url_saved);

    header('Location: ../../src/productos.php');
}else{
    header('Location: ../../src/Inicio.php');
}