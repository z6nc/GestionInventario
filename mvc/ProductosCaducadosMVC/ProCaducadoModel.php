
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
        $sql = "SELECT p.NOM_PRODUCTO, t.FECHA_CADUCIDAD, p.URL_IMG
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
}


?>