<?php
include '../mvc/SessionIniciada/Session.php';
require_once('../mvc/lista-ProductosMVC/ListaProductos.php');

$listaProductos = new ListasProductos();
$productosFila = (isset($_GET['IDP']))?$listaProductos->getRowTable($_GET['IDP']):null;


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
            <h1><?= (isset($_GET['IDP']))?'Editar Producto':'Agregar Producto'?></h1>
        </div>
        <form action="../mvc/lista-ProductosMVC/ListaProductosControll.php" method="post" id="form-agregar-productos" enctype="multipart/form-data" >
            <div class="fila-2">
                <label>Nombre: <input type="text" name="nombre" placeholder="Nombre del producto" value="<?= $productosFila['NOM_PRODUCTO'] ?? '' ?>"><br><span style="color:red"><?=isset($_GET['ERRNAME'])?'Ese nombre ya existe':''?></span></label>
                <label>Ubicacion del producto: <input type="text" name="ubicacion" placeholder="Lugar del almacen" value="<?= $productosFila['UBICACIONPRODUCTO'] ?? '' ?>"></label>
                <label>Proveedor:
                    <select name="proveedor">
                        <?php 
                        $listaProductos->comboBoxColumna('proveedor','IDPROVEEDOR','RAZON_SOCIAL',$productosFila['IDPROVEEDOR']);
                        ?>
                    </select>
                </label>
                <label>Categoria: 
                    <select name="categoria">
                        <?php 
                        $listaProductos->comboBoxColumna('categoria','idCategoria','nomCat',$productosFila['idCategoria']);
                        ?>
                    </select>
                </label>
                <label>Stock: <input type="number" name="stock" min="0" max="999"  value="<?= $productosFila['STOCK'] ?? null ?>"></label>
                <label>Precio Compra: <input type="text" name="precio" placeholder="Cuanto costo" value="<?= $productosFila['PRECIOCOMPRA']?? null ?>"></label>
                <label>Fecha Ingreso: <input type="date" name="fecha-ingreso" value="<?= $productosFila['FECHA_INGRESO']?? null ?>"></label>
                <label>Fecha Vencimiento: <input type="date" name="fecha-vencimiento" value="<?= $productosFila['FECHA_CADUCIDAD'] ?? null?>"></label>
                <label>Imagen: <input type="file" name="fileToUpload"  accept="image/*" value="<?= $productosFila['URL_IMG'] ?? null ?>"></label>     
                <input type="hidden" name="ID" value="<?= $productosFila['IDPRODUCTO'] ?? '' ?>">
                <input type="hidden" name="oldFile" value="<?= $productosFila['URL_IMG'] ?? '' ?>">                  
            </div>
        </form> 
        <div class="fila-3">
            <?php
            if(isset($_GET['IDP'])){
                echo '<button type="submit" form="form-agregar-productos" name="submit-editar-productos">Editar Producto</button>';
            }else{
                echo '<button type="submit" form="form-agregar-productos" name="submit-agregar-productos">Agregar Producto</button>';
            }
            ?>            
        </div>
    </div>
    
</main>
</body>
</html>