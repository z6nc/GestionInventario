<?php
class ContarProductoModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function ContarProducto() {
        $sql = "SELECT COUNT(*) AS TotalProductos FROM PRODUCTO; ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ProductosTotales=$row['TotalProductos'];
            return  $ProductosTotales ;// Usuario encontrado
        } else {
            return 0; // Usuario no encontrado
        }
    }
    
   
 
}
?>
