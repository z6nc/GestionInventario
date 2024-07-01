<?php
class TransaccionModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function listarProductos() {
        $sql = "SELECT * FROM producto";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoListarProductos[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                ];
            }
            return $ResultadoListarProductos;
        } else {
            return [];
        }
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
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_COMPRA' => $row['FECHA_COMPRA'],
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
   
    function InsertTransaccion($FechaCompra, $IdProducto, $Stock, $Precio, $FechaCaducidad, $Estado) {
        $sql = "INSERT INTO transacciones (FECHA_COMPRA, IDPRODUCTO, STOCK,PRECIO,FECHA_CADUCIDAD,ESTADO) VALUES (?, ?, ?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("siidss", $FechaCompra, $IdProducto, $Stock, $Precio, $FechaCaducidad, $Estado);
        $executeResult = $stmt->execute();
        $stmt->close();
    
        return $executeResult;
    }
    
    

    function DeleteTransacciones($IdTransccion) {
        $sql = "DELETE FROM transacciones WHERE ID_TRANSACCION = ?";
        $stmt = $this->conn->prepare($sql);
    
        // Verificar si el prepare fue exitoso
        if ($stmt === false) {
            return false;
        }
        // Asumir que IDMENU es un entero, usar 'i' en lugar de 's' si es necesario
        $stmt->bind_param("i", $IdTransccion);
        $executeResult = $stmt->execute();
        // Cerrar el statement
        $stmt->close();
        // Retornar el resultado de la ejecución
        return $executeResult;
    }
    
    public function getTransaccionesById($IdTransccion) {
        $sql = "SELECT * FROM transacciones WHERE ID_TRANSACCION = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $IdTransccion);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            return false;
        }

        $menuData = $result->fetch_assoc();

        $stmt->close();

        return $menuData;
    }

    function UpdateTransacciones($FechaCompra, $IdProducto, $Stock, $Precio, $FechaCaducidad, $Estado, $IdTransaccion) {
        $sql = "UPDATE transacciones SET  FECHA_COMPRA = ?, IDPRODUCTO = ?, STOCK = ?, PRECIO = ?, FECHA_CADUCIDAD = ?,  ESTADO = ? WHERE ID_TRANSACCION = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("siidssi", $FechaCompra, $IdProducto, $Stock, $Precio, $FechaCaducidad, $Estado, $IdTransaccion);
        $executeResult = $stmt->execute();
        $stmt->close();
        return $executeResult;
    }
    
    
   
 
}
?>
