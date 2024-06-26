
<?php
class ListarProveedorMode
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ListarProveedor()
    {
        $sql = "SELECT *
        FROM proveedor "; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoListarProveedor[] = [
                    'IDPROVEEDOR' => $row['IDPROVEEDOR'],
                    'RAZON_SOCIAL' => $row['RAZON_SOCIAL'],
                    'RUC' => $row['RUC']
                ];
            }
            return $ResultadoListarProveedor;
        } else {
            return [];
        }
    }
}


?>