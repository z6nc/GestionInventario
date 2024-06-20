
<?php
class ListarMenuMode
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ListarMenu()
    {
        $sql = "SELECT *
        FROM menu "; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoListarMenu[] = [
                    'IDMENU' => $row['IDMENU'],
                    'NOMBRE_MENU' => $row['NOMBRE_MENU'],
                    'PRECIOVENTA' => $row['PRECIOVENTA'],
                    'EstadoMenu' => $row['EstadoMenu']
                ];
            }
            return $ResultadoListarMenu;
        } else {
            return [];
        }
    }
}


?>