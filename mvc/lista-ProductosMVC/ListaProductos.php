<?php

class ListasProductos extends mysqli{

    private array $rowTable;
    
    private const SERVER_NAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DATABASE = "rest_chur";    
    private const PORT = "3306";
    
    public function __construct(){
        parent::__construct(self::SERVER_NAME, self::USERNAME, self::PASSWORD, self::DATABASE, self::PORT);        
    }

    public function __destruct(){
        $this->close();
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
            echo '<td class="image-contain-table"><img src="images/'. $row['URL_IMG'].'" alt="imagen del producto" onerror="this.onerror=null; this.src=\'images/default.gif\'"  /></td>';
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
        
        echo '<option value>seleccionar</option>';
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

    public function editProducto(string $nomProduct,string $fecha_in, string $fecha_Cad,int $stock, float $precio, string $ubicacion, int $idProvedor, int $idCategoria,string $urlIMG, int $id){ 
        try{               
            $prepareStatement = $this->prepare("UPDATE producto SET NOM_PRODUCTO=?,FECHA_INGRESO=?,FECHA_CADUCIDAD=?,STOCK=?,PRECIOCOMPRA=?,UBICACIONPRODUCTO=?, IDPROVEEDOR=?,idCategoria=?,URL_IMG=? WHERE IDPRODUCTO = ?");
            $prepareStatement->bind_param("sssidsiisi",$nomProduct, $fecha_in, $fecha_Cad,$stock,$precio,$ubicacion,$idProvedor,$idCategoria,$urlIMG,$id);
            $prepareStatement->execute();
        }catch (exception $ex){
            echo $ex->getMessage();
            
        } 
    }

    public function removeProducto(int $idProducto){        
        $prepareStatement = $this->prepare("DELETE FROM transacciones WHERE IDPRODUCTO = ?");
        $prepareStatement->bind_param("i",$idProducto);
        $prepareStatement->execute();

        $prepareStatement = $this->prepare("DELETE FROM producto WHERE IDPRODUCTO = ?");
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