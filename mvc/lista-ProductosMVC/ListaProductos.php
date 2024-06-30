<?php

$fullPath = realpath("..\mvc\BD\BDconexion.php");
if (!in_array($fullPath, get_included_files())) {
    require_once($fullPath);
}

class ListasProductos extends DataBaseConnection{

    private array $rowTable;
    
    public function __construct(){
        parent::__construct();        
    }

    //> SET GLOBAL lc_time_names = 'es_PE'; 
    //para la fecha muestre en español
    public function tablaProductos($categoria = 0, $date_init, $date_end){
        $sqlCommand = "SELECT IDPRODUCTO,URL_IMG,NOM_PRODUCTO,STOCK,nomCat,TRUNCATE(PRECIOCOMPRA,2) AS PRECIOCOMPRA,
                RAZON_SOCIAL,DATE_FORMAT(FECHA_INGRESO, '%d-%M-%Y') AS FECHA_INGRESO,DATE_FORMAT(FECHA_CADUCIDAD, '%d-%M-%Y') AS FECHA_CADUCIDAD 
                FROM producto 
                JOIN proveedor ON producto.IDPROVEEDOR = proveedor.IDPROVEEDOR 
                JOIN categoria ON producto.idCategoria = categoria.idCategoria 
                WHERE (producto.idCategoria = ? OR 0 = ?) 
                AND IFNULL(FECHA_INGRESO BETWEEN ? AND ? ,FECHA_INGRESO) 
                ORDER BY producto.IDPRODUCTO";
        $prepareStatement = $this->prepare($sqlCommand);
        $prepareStatement->bind_param("iiss",$categoria,$categoria,$date_init,$date_end);
        $prepareStatement->execute();
        $resultSet = $prepareStatement->get_result();
        while($row = $resultSet->fetch_assoc()) {
            echo '<tr>';
            echo "<td>{$row['IDPRODUCTO']}</td>";
            echo '<td class="image-contain-table"><img src="//'.$_SERVER['HTTP_HOST'].'/src/images/'. $row['URL_IMG'].'" alt="imagen del producto" /></td>';
            echo "<td>{$row['NOM_PRODUCTO']}</td>";
            echo '<td>'. $row['STOCK'].'</td>';
            echo '<td>'. $row['nomCat'].'</td>';
            echo '<td>'. $row['PRECIOCOMPRA'].'</td>';
            echo '<td>'. $row['RAZON_SOCIAL'].'</td>';
            echo '<td>'. $row['FECHA_INGRESO'].'</td>';
            echo '<td>'. $row['FECHA_CADUCIDAD'].'</td>';
            echo '<td>
                    <button name="btn-edit" class="btn-edit" form="form-options-productos" value="'.$row['IDPRODUCTO'].'"></button>
                    <button name="btn-delete" class="btn-delete" form="form-options-productos" value="'.$row['IDPRODUCTO'].'"></button>
                  </td>';
            echo '</tr>';                            
        }
    }

    /**
     *  Crea las <opciones> para un comboBox en base a la base de datos, value es el valor que va a tomar
     *  element es la etiqueta de cada elemento dentro del 'comboBox' y selectvalue  
     *  string $colNam = null es el nombre de la tabla
     *  string $value = null el nombre de la columna referente a la tabla
     *  string $element = null el nombre de la columna referente a la tabla
     *  string $SelectValue = null valor que quiera seleccionar
     */
    public function comboBoxColumna(string $colName, string $value, string $element,string $SelectValue = null){
        $resultSet = $this->query("SELECT * FROM $colName");
        if(isset($SelectValue)){
            $SelectValue = '';
            
        }

        echo '<option '.($SelectValue === '' ?'selected':'').' value>seleccionar</option>';
        while($row = $resultSet->fetch_assoc()) {
            echo '<option '.($SelectValue === strval($row[$value]) ?'selected':'').' value="'.$row[$value].'">'.$row[$element].'</option>';
        }
        
    }

    public function addNewProducto(string $nomProduct,string $fecha_in, string $fecha_Cad,int $stock, float $precio, string $ubicacion, int $idProvedor, int $idCategoria,string $urlIMG){      
        try{
            $prepareStatement = $this->prepare("INSERT INTO producto(NOM_PRODUCTO,FECHA_INGRESO,FECHA_CADUCIDAD,STOCK,PRECIOCOMPRA,UBICACIONPRODUCTO, IDPROVEEDOR,idCategoria,URL_IMG) VALUES (?,?,?,?,?,?,?,?,?)");
            $prepareStatement->bind_param("sssidsiis",$nomProduct, $fecha_in, $fecha_Cad,$stock,$precio,$ubicacion,$idProvedor,$idCategoria,$urlIMG);
            $prepareStatement->execute();
        } catch(exception $ex){
            header('Location: ../../src/productos-opciones.php?ERRNAME=1');
            exit();
        }        
    }

    public function editProducto(string $nomProduct,string $fecha_in, string $fecha_Cad,int $stock, float $precio, string $ubicacion, int $idProvedor, int $idCategoria,string $urlIMG){        
        $prepareStatement = $this->prepare("UPDATE producto SET NOM_PRODUCTO=?,FECHA_INGRESO=?,FECHA_CADUCIDAD=?,STOCK=?,PRECIOCOMPRA=?,UBICACIONPRODUCTO=?, IDPROVEEDOR=?,idCategoria=?,URL_IMG=? WHERE producto.IDPRODUCTO = ?");
        $prepareStatement->bind_param("sssidsiis",$nomProduct, $fecha_in, $fecha_Cad,$stock,$precio,$ubicacion,$idProvedor,$idCategoria,$urlIMG);
        $prepareStatement->execute();
    }

    public function removeProducto(int $idProducto){        
        $prepareStatement = $this->prepare("DELETE FROM producto WHERE producto.IDPRODUCTO = ?");
        $prepareStatement->bind_param("i",$idProducto);
        $prepareStatement->execute();
    }

    public function getRowTable(int $idProducto): array{
        $prepareStatement = $this->prepare("SELECT * FROM producto WHERE producto.IDPRODUCTO = ?");
        $prepareStatement->bind_param("i",$idProducto);
        $prepareStatement->execute();
        $resultSet = $prepareStatement->get_result();
        $this->rowTable = $resultSet->fetch_assoc();
        return $this->rowTable;
    }
}