<?php
class ProveedorModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function InsertProveedor($NombreProveedor, $RucProveedor, $IdUsuario) {
        $sql = "INSERT INTO proveedor (RAZON_SOCIAL, RUC, IDUSUARIO) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("ssi", $NombreProveedor, $RucProveedor, $IdUsuario);
    
        $executeResult = $stmt->execute();
    
        $stmt->close();
    
        return $executeResult;

    }
    

    function DeleteProveedor($IdProveedor) {
        $sql = "DELETE FROM proveedor WHERE IDPROVEEDOR = ?";
        $stmt = $this->conn->prepare($sql);
    
        // Verificar si el prepare fue exitoso
        if ($stmt === false) {
            return false;
        }
        // Asumir que IDMENU es un entero, usar 'i' en lugar de 's' si es necesario
        $stmt->bind_param("i", $IdProveedor);
        $executeResult = $stmt->execute();
        // Cerrar el statement
        $stmt->close();
        // Retornar el resultado de la ejecución
        return $executeResult;
    }
    
    public function getProveedorById($IDPROVEEDOR) {
        $sql = "SELECT * FROM proveedor WHERE IDPROVEEDOR = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $IDPROVEEDOR);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            return false;
        }

        $proveedorData = $result->fetch_assoc();

        $stmt->close();

        return $proveedorData;
    }

    function UpdateProveedor($IdProveedor, $NombreProveedor, $RucProveedor) {
        $sql = "UPDATE proveedor SET RAZON_SOCIAL = ?, RUC = ? WHERE IDPROVEEDOR = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("ssi", $NombreProveedor, $RucProveedor, $IdProveedor);
        $executeResult = $stmt->execute();
        $stmt->close();
        return $executeResult;
    }
    
    
   
 
}
?>
