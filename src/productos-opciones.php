<?php
require_once '../mvc/SessionIniciada/Session.php';
require_once('../mvc/lista-ProductosMVC/ListaProductos.php');

$listaProductos = new ListasProductos();
?>
<html lang="es">
<head>
    <?php include 'componets/head-elements.php';?>
    <title>Productos opciones</title>
</head>
<body>
<main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
?>
    <div class="productos-accion marco">
        <div class="fila-1">
            <h1>Agregar Producto</h1>
        </div>
        <form action="../mvc/lista-ProductosMVC/ListaProductosControll.php" method="post" id="form-agregar-productos" enctype="multipart/form-data" >
            <div class="fila-2">
                <label>Nombre: <input type="text" name="nombre"></label>
                <label>Ubicacion del producto: <input type="text" name="ubicacion"></label>
                <label>Proveedor:
                    <select name="proveedor">
                        <option selected value>proveedor</option>
                        <?php 
                        $listaProductos->comboBoxProveedores();
                        ?>
                    </select>
                </label>
                <label>Categoria: 
                    <select name="categoria">
                        <option selected value>categoria</option>
                        <?php 
                        $listaProductos->comboBoxCategorias();
                        ?>
                    </select>
                </label>
                <label>Stock: <input type="number" name="stock" min="0"></label>
                <label>Precio Compra: <input type="text" name="precio"></label>
                <label>Fecha Ingreso: <input type="date" name="fecha-ingreso"></label>
                <label>Fecha Vencimiento: <input type="date" name="fecha-vencimiento"></label>
                <label>Imagen: <input type="file" name="fileToUpload"></label>                       
            </div>
        </form> 
        <div class="fila-3">
            <button type="submit" form="form-agregar-productos" name="submit-agregar-productos">Agregar Producto</button>
        </div>
    </div>
    
</main>
</body>
</html>