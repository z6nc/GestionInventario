
<?php
class ProductoAñadidoMode
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ProductosAñadidos()
    {
        $sql = "SELECT NOM_PRODUCTO, FECHA_INGRESO , STOCK , URL_IMG
        FROM PRODUCTO 
        ORDER BY FECHA_INGRESO DESC 
        LIMIT 3;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoProducto[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_INGRESO' => $row['FECHA_INGRESO'],
                    'STOCK' => $row['STOCK'],
                    'URL_IMG' => $row['URL_IMG']
                ];
            }
            return $ResultadoProducto;
        } else {
            return [];
        }
    }
}


?>