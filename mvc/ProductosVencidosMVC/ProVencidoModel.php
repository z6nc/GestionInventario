<?php
class ProductoPorVencerModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function VencerProducto() {
        $sql = "SELECT COUNT(*) AS ProductosVencer    
        FROM transacciones 
        WHERE FECHA_CADUCIDAD BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 15 DAY);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ProductosVencer=$row['ProductosVencer'];
            return  $ProductosVencer ;
        } else {
            return 0; 
        }
    }
  
    
    function ListarVencerProducto()
    {
        $sql = "SELECT p.NOM_PRODUCTO , p.URL_IMG,t.FECHA_COMPRA , t.FECHA_CADUCIDAD
            FROM transacciones t
            INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
            WHERE t.FECHA_CADUCIDAD BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 15 DAY)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoProductoVencidos[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_CADUCIDAD' => $row['FECHA_CADUCIDAD'],
                    'URL_IMG' => $row['URL_IMG']
                ];
            }
            return $ResultadoProductoVencidos;
        } else {
            return [];
        }
    }
    
   
 
}


?>