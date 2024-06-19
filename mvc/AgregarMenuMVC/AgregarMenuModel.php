<?php
class MenuModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function InsertMenu($NombreMenu, $PrecioMenu, $EstadoMenu) {
        $sql = "INSERT INTO menu (NOMBRE_MENU, PRECIOVENTA, EstadoMenu) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sis", $NombreMenu, $PrecioMenu, $EstadoMenu);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            return  true ;// Usuario encontrado
        } else {
            return false; // Usuario no encontrado
        }
    }
    
   
 
}
?>
