
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
        $sql = "SELECT p.NOM_PRODUCTO, t.STOCK, p.URL_IMG,t.FECHA_COMPRA
            FROM transacciones t
            INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
            WHERE t.ESTADO = 'Revisado' OR t.ESTADO = 'Pendiente'
            ORDER BY t.FECHA_COMPRA DESC 
            LIMIT 3;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoProducto[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_COMPRA' => $row['FECHA_COMPRA'],
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