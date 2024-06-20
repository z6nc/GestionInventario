<?php
require_once '../mvc/SessionIniciada/Session.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'componets/head-elements.php';?>
    <title>Productos</title>
</head>
<body>
    <main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
?>

        <div class="productos marco">
            <div class="encabezado">
                <h1>Lista de productos</h1>
                <button>Agregar Producto</button>
            </div>
            <div class="filtros">
                <div class = "fila-1">
                    <label>Buscar: <input type="text" name="buscar-producto" /></label>
                    <label>Precio: <input type="text" name="precio-producto" /></label>
                    <label>Desde: <input type="date" name="fecha-desde-producto" /></label>
                    <label>Hasta: <input type="date" name="fecha-hasta-producto" /></label>
                    <label>Categoria: 
                        <select name="example">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="-">Other</option>
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
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Sal de mesa</td>
                            <td>20</td>
                            <td>Condimentos</td>
                            <td>40</td>
                            <td>Emsa</td>
                            <td>2024-06-12</td>
                            <td>2025-06-16</td>
                            <td>EJECUTAR x_x</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>