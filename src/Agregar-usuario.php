<?php
include '../mvc/SessionIniciada/Session.php';
require_once('../mvc/acceso-usuarios/Class-acceso-usuarios.php');

$accesoUsuarios = new AccesoUsuarios();
$usuarioInf = (isset($_GET['IDU']))?$accesoUsuarios->getRowTable($_GET['IDU']):null;

?>
<html lang="es">
<head>
    <?php include 'componets/head-elements.php';?>
    <title>Productos opciones</title>
</head>
<body  class="font-Secundario">
<main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
?>
    <div class="productos-accion marco">
        <div class="fila-1">
            <h1><?= (isset($_GET['IDU']))?'Editar Usuario':'Agregar Usuario'?></h1>
        </div>
        <form action="../mvc/acceso-usuarios/Acceso-UsuariosControll.php" method="post" id="form-option-user" enctype="multipart/form-data" >
            <div class="fila-2">
                <label>Nombres: <input type="text" name="name" placeholder="Ingrese nombres" value="<?= $usuarioInf['NOMBRE'] ?? '' ?>"></label>
                <label>Apellidos: <input type="text" name="last-name" placeholder="Ingrese apellidos" value="<?= $usuarioInf['APELLIDO'] ?? '' ?>"></label>
                <label>Jerarquia:
                    <select name="jerarquia">
                        <?php 
                        $accesoUsuarios->comboBoxJerarquia($usuarioInf['IDJERARQUIA'] ?? 0 );
                        ?>
                    </select>
                </label>
                <label>Usuario: <input type="text" name="usuario" placeholder="Ingrese su usuario" value="<?= $usuarioInf['USUARIO'] ?? '' ?>"></label>
                <label>Contraseña: <input type="password" name="contraseña" value=""></label>                  
            </div>
        </form> 
        <div class="fila-3">
            <?php
            if(isset($_GET['IDU'])){
                echo '<input type="hidden" form="form-option-user" name="iduser" value="'.$usuarioInf['IDUSUARIO'].'">';                
                echo '<button type="submit" form="form-option-user" name="submit-edit-user">Editar Usuario</button>';
            }else{
                echo '<button type="submit" form="form-option-user" name="submit-add-user">Agregar Usuario</button>';
            }
            ?>            
        </div>
    </div>
    
</main>
</body>
</html>