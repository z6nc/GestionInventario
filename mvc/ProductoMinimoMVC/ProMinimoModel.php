
<?php
class ProductoMinimoMode
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ProductosMinimoStock()
    {
        $sql = "SELECT p.NOM_PRODUCTO, t.STOCK, p.URL_IMG
        FROM transacciones t
        INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
        WHERE (t.ESTADO = 'revisado' OR t.ESTADO = 'pendiente') AND t.STOCK <= 2
        LIMIT 3;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoProductoMinino[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'URL_IMG' => $row['URL_IMG']
                ];
            }
            return $ResultadoProductoMinino;
        } else {
            return [];
        }
    }
}


?>