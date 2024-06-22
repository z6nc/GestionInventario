<?php
class MenuModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function InsertMenu($NombreMenu, $PrecioMenu, $EstadoMenu) {
        $sql = "INSERT INTO menu (NOMBRE_MENU, PRECIOVENTA, EstadoMenu) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("sis", $NombreMenu, $PrecioMenu, $EstadoMenu);
    
        $executeResult = $stmt->execute();
    
        $stmt->close();
    
        return $executeResult;
    }
    

    function DeleteMenu($IdMenu) {
        $sql = "DELETE FROM menu WHERE IDMENU = ?";
        $stmt = $this->conn->prepare($sql);
    
        // Verificar si el prepare fue exitoso
        if ($stmt === false) {
            return false;
        }
    
        // Asumir que IDMENU es un entero, usar 'i' en lugar de 's' si es necesario
        $stmt->bind_param("i", $IdMenu);
    
        $executeResult = $stmt->execute();
    
        // Cerrar el statement
        $stmt->close();
    
        // Retornar el resultado de la ejecución
        return $executeResult;
    }
    
    
   
 
}
?>
