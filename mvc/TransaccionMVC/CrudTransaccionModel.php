<?php
class TransaccionModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    function ListarTransaccion()
    {
        $sql = "SELECT t.*, p.NOM_PRODUCTO 
            FROM transacciones t
            INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoListarTransaccion[] = [
                    'ID_TRANSACCION' => $row['ID_TRANSACCION'],
                    'FECHA_COMPRA' => $row['FECHA_COMPRA'],
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIO' => $row['PRECIO'],
                    'FECHA_CADUCIDAD' => $row['FECHA_CADUCIDAD'],
                    'MONTO_TOTAL' => $row['MONTO_TOTAL'],
                    'ESTADO' => $row['ESTADO'],
                ];
            }
            return $ResultadoListarTransaccion;
        } else {
            return [];
        }
    }
    function CheckMenuName($NombreMenu) {
        $sql = "SELECT NOMBRE_MENU FROM menu WHERE NOMBRE_MENU = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("s", $NombreMenu);
        $stmt->execute();
        $stmt->store_result();
        $existingMenuName= "";
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($existingMenuName);
            $stmt->fetch();
            $stmt->close();
            return $existingMenuName;
        }
        $stmt->close();
        return null;
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
    
    public function getMenuById($IDMENU) {
        $sql = "SELECT * FROM menu WHERE IDMENU = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $IDMENU);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            return false;
        }

        $menuData = $result->fetch_assoc();

        $stmt->close();

        return $menuData;
    }

    function UpdateMenu($IdMenu, $NombreMenu, $PrecioMenu, $EstadoMenu) {
        $sql = "UPDATE menu SET NOMBRE_MENU = ?, PRECIOVENTA = ?, EstadoMenu = ? WHERE IDMENU = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("sisi", $NombreMenu, $PrecioMenu, $EstadoMenu, $IdMenu);
        $executeResult = $stmt->execute();
        $stmt->close();
        return $executeResult;
    }
    
    
   
 
}
?>
