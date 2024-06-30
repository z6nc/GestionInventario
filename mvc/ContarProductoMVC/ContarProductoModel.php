<?php

class ContarProductoModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function ContarProducto() {
        $sql = "SELECT COUNT(*) AS TotalProductos FROM transacciones
        WHERE transacciones.ESTADO = 'revisado' OR transacciones.ESTADO = 'pendiente';"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ProductosTotales=$row['TotalProductos'];
            return  $ProductosTotales ;
        } else {
            return 0; 
        }
    }
    
   
 
}
?>
