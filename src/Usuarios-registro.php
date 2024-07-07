<?php
include '../mvc/SessionIniciada/Session.php';
include '../mvc/acceso-usuarios/Class-acceso-usuarios.php';

$accesoUsuarios = new AccesoUsuarios();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php include 'componets/head-elements.php';?>
    <title>Usuarios</title>
</head>
<body class="font-Secundario">
<form action="..\mvc\acceso-usuarios\Acceso-UsuariosControll.php" method="post" id="form-options-usuarios"></form>

</form>
    <main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
?>
    <section class="ContainerTableUsuario">
        
        <div class="productos marco"  >
            <div class="encabezado">
                <h1>Usuarios Registrados</h1>
                <button type="button" onclick="window.location.href = 'Agregar-usuario.php' ">Agregar Usuario</button>
            </div>
            <div class="container-table">
                <table id="tabla-productos">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre y apellido</th>
                            <th>Usuario</th>
                            <th>Jerarquia</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        $accesoUsuarios->tablaUsuarios();
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    </main>
    <style>
        .ContainerTableUsuario{
            background-color: whitesmoke;
            width: 100%;
        }
        .productos{
            background-color: white;
        }
       
        .productos.marco{
    height: 75vh;
    padding: 20px;
    margin: 0px 25px;
    margin-bottom: 25px;
    border: 1px black solid;
    
}
    </style>
</body>
</html>