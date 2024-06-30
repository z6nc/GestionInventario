<?php
require_once("Class-acceso-usuarios.php");

$accesoUsuarios = new AccesoUsuarios();
if(isset($_POST['btn-edit-user'])){
    header('Location: ../../src/Agregar-usuario.php?IDU='.$_POST['btn-edit-user']);
}else if(isset($_POST['btn-delete-user'])){
    $accesoUsuarios->removeUser($_POST['btn-delete-user']);
}else if(isset($_POST['submit-edit-user'])){
    $accesoUsuarios->editUser($_POST['name'],$_POST['last-name'],$_POST['usuario'],$_POST['jerarquia'],$_POST['contraseña'],$_POST['iduser']);
}else if(isset($_POST['submit-add-user'])){
    $accesoUsuarios->addNewUser($_POST['name'],$_POST['last-name'],$_POST['usuario'],$_POST['jerarquia'],$_POST['contraseña']);    
}else{
    header('Location: ../../src/Inicio.php');
}
header('Location: ../../src/Usuarios-registro.php');
