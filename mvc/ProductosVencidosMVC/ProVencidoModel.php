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
    
   
 
}


?>