
<?php
class ProductoCaducidoMode
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ProductosCaducido()
    {
        $sql = "SELECT t.ID_TRANSACCION, p.NOM_PRODUCTO, t.FECHA_CADUCIDAD, p.URL_IMG 
        FROM transacciones t
        INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
        WHERE t.FECHA_CADUCIDAD <= CURDATE() AND t.ESTADO = 'Pendiente'
        LIMIT 3;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoProductosCaducido[] = [
                    'ID_TRANSACCION' => $row['ID_TRANSACCION'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_CADUCIDAD'=>$row['FECHA_CADUCIDAD'],
                    'URL_IMG' => $row['URL_IMG']
                ];
            }
            return $ResultadoProductosCaducido;
        } else {
            return [];
        }
    }
    function ProductosCaducadoID($ID_TRANSACCION)
    {
    $sql = "SELECT t.ID_TRANSACCION, p.NOM_PRODUCTO , p.URL_IMG ,t.ESTADO
    from transacciones t 
    INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
    WHERE t.ID_TRANSACCION = ?;";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $ID_TRANSACCION);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ResultadoProductosCaducadoID = [
            'ID_TRANSACCION' => $row['ID_TRANSACCION'],
            'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
            'URL_IMG' => $row['URL_IMG'],
            'ESTADO' => $row['ESTADO']
        ];
        return $ResultadoProductosCaducadoID;
    } else{
        return [];
    }
    }
}


?>