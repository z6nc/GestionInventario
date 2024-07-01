<?php
include '../mvc/SessionIniciada/Session.php';
include '../mvc/lista-ProductosMVC/ListaProductos.php';

$listaProductos = new ListasProductos();

$categoria = isset($_POST['categorias-combobox'])  ? $_POST['categorias-combobox'] : 0;
$date_init = isset($_POST['fecha-desde-producto']) ? $_POST['fecha-desde-producto']: null;
$date_end  = isset($_POST['fecha-hasta-producto']) ? $_POST['fecha-hasta-producto']: date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php include 'componets/head-elements.php';?>
    <script>
        //colInd es el indice de columna, comienza en 0
        function barraBusqueda(idElement,colInd) {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(idElement);
            filter = input.value.toUpperCase();
            table = document.getElementById("tabla-productos");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[colInd];
                if (td) {
                txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <title>Productos</title>
</head>
<body class="font-Secundario">
    <form action="..\mvc\lista-ProductosMVC\ListaProductosControll.php" method="post" id="form-options-productos"></form>
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
                        <label>Desde: <input type="date" name="fecha-desde-producto" value="<?= $date_init ?>"/></label>
                        <label>Hasta: <input type="date" name="fecha-hasta-producto" value="<?= $date_end  ?>"/></label>
                        <label>Categoria: 
                            <select name="categorias-combobox">
                                <?php 
                                $listaProductos->comboBoxColumna('categoria','idCategoria','nomCat');
                                ?>
                            </select>
                        </label>
                    </div>
                    <div class = "fila-2">
                        <label>Buscar: <input type="text" id="buscar-producto"  onkeyup="barraBusqueda('buscar-producto',2)" placeholder="Nombre de producto"  /></label>
                        <label>Proveedor: <input type="text" id="buscar-proveedor" onkeyup="barraBusqueda('buscar-proveedor',6)" placeholder="Nombre de proveedor" /></label>                        
                    </div>
                    <div class = "fila-3">
                        <button>Apunto de vencer</button>
                        <button>Aplicar filtro</button>
                    </div>
                </div>
            </form>
            <div class="container-table">
                <table id="tabla-productos">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Sock</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Proveedor</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        $listaProductos->tablaProductos($categoria,$date_init,$date_end);
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>