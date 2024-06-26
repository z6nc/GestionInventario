<?php
require_once($_SERVER['DOCUMENT_ROOT']."/mvc/BD/BDconexion.php");
class ListasProductos extends DataBaseConnection{
    
    public function __construct(){
        parent::__construct();        
    }

    //> SET GLOBAL lc_time_names = 'es_PE'; 
    //para la fecha muestre en español
    public function tablaProductos($categoria = 0){
        $sqlCommand = "SELECT IDPRODUCTO,URL_IMG,NOM_PRODUCTO,STOCK,nomCat,TRUNCATE(PRECIOCOMPRA,2) AS PRECIOCOMPRA,
                RAZON_SOCIAL,DATE_FORMAT(FECHA_INGRESO, '%d-%M-%Y') AS FECHA_INGRESO,DATE_FORMAT(FECHA_CADUCIDAD, '%d-%M-%Y') AS FECHA_CADUCIDAD 
                FROM producto 
                JOIN proveedor ON producto.IDPROVEEDOR = proveedor.IDPROVEEDOR 
                JOIN categoria ON producto.idCategoria = categoria.idCategoria 
                WHERE (producto.idCategoria = ? OR 0 = ?)";
        $prepareStatement = $this->prepare($sqlCommand);
        $prepareStatement->bind_param("ii",$categoria,$categoria);
        $prepareStatement->execute();
        $resultSet = $prepareStatement->get_result();
        while($row = $resultSet->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'. $row['IDPRODUCTO'].'</td>';
            echo '<td class="image-contain-table"><img src="//'.$_SERVER['HTTP_HOST']. $row['URL_IMG'].'" alt="imagen del producto" /></td>';
            echo '<td>'. $row['NOM_PRODUCTO'].'</td>';
            echo '<td>'. $row['STOCK'].'</td>';
            echo '<td>'. $row['nomCat'].'</td>';
            echo '<td>'. $row['PRECIOCOMPRA'].'</td>';
            echo '<td>'. $row['RAZON_SOCIAL'].'</td>';
            echo '<td>'. $row['FECHA_INGRESO'].'</td>';
            echo '<td>'. $row['FECHA_CADUCIDAD'].'</td>';
            echo '<td><button class="btn-edit"></button><button class="btn-delete"></button></td>';
            echo '</tr>';                            
        }
    }

    public function comboBoxCategorias(){
        $resultSet = $this->query("SELECT * FROM categoria");
        while($row = $resultSet->fetch_assoc()) {
            echo '<option value="'.$row['idCategoria'].'">'.$row['nomCat'].'</option>';
        }
    }

    public function comboBoxProveedores(){
        $resultSet = $this->query("SELECT IDPROVEEDOR,RAZON_SOCIAL FROM proveedor");
        while($row = $resultSet->fetch_assoc()) {
            echo '<option value="'.$row['IDPROVEEDOR'].'">'.$row['RAZON_SOCIAL'].'</option>';
        }
    }

    public function addNewProducto(string $nomProduct,string $fecha_in, string $fecha_Cad,int $stock, float $precio, string $ubicacion, int $idProvedor, int $idCategoria,string $urlIMG){        
        $prepareStatement = $this->prepare("INSERT INTO producto(NOM_PRODUCTO,FECHA_INGRESO,FECHA_CADUCIDAD,STOCK,PRECIOCOMPRA,UBICACIONPRODUCTO, IDPROVEEDOR,idCategoria,URL_IMG) VALUES (?,?,?,?,?,?,?,?,?)");
        $prepareStatement->bind_param("sssidsiis",$nomProduct, $fecha_in, $fecha_Cad,$stock,$precio,$ubicacion,$idProvedor,$idCategoria,$urlIMG);
        $prepareStatement->execute();
    }
}