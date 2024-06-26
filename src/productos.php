<?php
require_once '../mvc/SessionIniciada/Session.php';
require_once('../mvc/lista-ProductosMVC/ListaProductos.php');

$listaProductos = new ListasProductos();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php include 'componets/head-elements.php';?>
    <title>Productos</title>
</head>
<body class="font-Secundario">
    <main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
?>

        <div class="productos marco" >
            <div class="encabezado">
                <h1>Lista de productos</h1>
                <button type="button" onclick="window.location.href = 'productos-opciones.php' ">Agregar Producto</button>
            </div>
            <form action="productos.php" method="post">
                <div class="filtros">                
                    <div class = "fila-1">                    
                        <label>Buscar: <input type="text" name="buscar-producto" /></label>
                        <label>Precio: <input type="text" name="precio-producto" /></label>
                        <label>Desde: <input type="date" name="fecha-desde-producto" /></label>
                        <label>Hasta: <input type="date" name="fecha-hasta-producto" /></label>
                        <label>Categoria: 
                            <select name="categorias-combobox">
                                <option selected value>seleccionar</option>
                                <?php 
                                $listaProductos->comboBoxCategorias();
                                ?>
                            </select>
                        </label>
                    </div>
                    <div class = "fila-2">
                        <label>Peroveedor: <input type="text" name="proveedor-producto" /></label>
                        <label>Fecha de ingreso: <input type="date" name="ingreso-producto" /></label>
                        <label>Fecha de Vencimiento: <input type="date" name="vencimiento-producto" /></label>
                    </div>
                    <div class = "fila-3">
                        <button>Aplicar filtro</button>
                    </div>
                </div>
            </form>
            <div class="container-table">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Sock</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Proveedor</th>
                            <th>Ingreso</th>
                            <th>Vencimiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $listaProductos->tablaProductos(isset($_POST['categorias-combobox'])?$_POST['categorias-combobox']:0);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>