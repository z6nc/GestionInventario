<?php
require_once '../mvc/SessionIniciada/Session.php';
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
        <div class="fila-2">
            <label>Nombre: <input type="text" name="nombre"></label>
            <label>Proveedor: <input type="text" name="proveedor"></label>
            <label>Categoria: <input type="text" name="categoria"></label>
            <label>Stock: <input type="text" name="stock"></label>
            <label>Precio Compra: <input type="text" name="precio"></label>
            <label>Fecha Ingreso: <input type="date" name="fecha-ingreso"></label>
            <label>Fecha Vencimiento: <input type="date" name="fecha-vencimiento"></label>
	    <label>Imagen: <input type="file" name="imagen-url"></label>
        </div>
        <div class="fila-3">
            <button formmethod="post" formtarget="/foo.php" type="submit">Agregar Producto</button>
        </div>
    </div>
    
</main>
</body>
</html>