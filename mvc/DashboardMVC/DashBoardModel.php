<?php
class DashBoardModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    function ProductosMayorStock() {
        $sql = "SELECT NOM_PRODUCTO, STOCK
                FROM PRODUCTO 
                ORDER BY STOCK DESC 
                LIMIT 6"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $ProductosConMayorStock = [];
            while ($row = $result->fetch_assoc()) {
                $ProductosConMayorStock[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                ];
            }
            return $ProductosConMayorStock;
        } else {
            return [];
        }
    }
    
    
   
 
}
?>
