<?php
class DashBoardModel
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function ProductosMayorStock()
    {
        $sql = "SELECT NOM_PRODUCTO, STOCK
                FROM PRODUCTO 
                ORDER BY STOCK DESC 
                LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $ProductosConMayorStock = [];
            while ($row = $result->fetch_assoc()) {
                $ProductosConMayorStock[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                ];
            }
            return $ProductosConMayorStock;
        } else {
            return [];
        }
    }
    function ProductosPocoStock()
    {
        $sql = "SELECT NOM_PRODUCTO, STOCK
                FROM PRODUCTO 
                ORDER BY STOCK ASC 
                LIMIT 10";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $ProductosConPocoStock = [];
            while ($row = $result->fetch_assoc()) {
                $ProductosConPocoStock[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                ];
            }
            return $ProductosConPocoStock;
        } else {
            return [];
        }
    }
    function ProductosVencidos()
    {
        $sql = "SELECT NOM_PRODUCTO, FECHA_VENCIMIENTO
                FROM PRODUCTO 
                WHERE FECHA_VENCIMIENTO < CURDATE()";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $ProductosVencidos = [];
            while ($row = $result->fetch_assoc()) {
                $ProductosVencidos[] = [
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'FECHA_VENCIMIENTO' => $row['FECHA_VENCIMIENTO'],
                ];
            }
            return $ProductosVencidos;
        } else {
            return [];
        }
    }
    function GastoPorMes()
    {
        $sql = "SELECT 
        MONTH(FECHA_INGRESO) AS Mes,
        YEAR(FECHA_INGRESO) AS Año,
        SUM(PRECIOCOMPRA * STOCK) AS GastoPorMes FROM 
        PRODUCTO 
        WHERE FECHAINGRESO >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
        GROUP BY YEAR(FECHAINGRESO), MONTH(FECHAINGRESO)
        ORDER BY  Año DESC, Mes DESC  ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $GastoPorMes = [];
            while ($row = $result->fetch_assoc()) {
                $GastoPorMes[] = [
                    'MES' => $row['MES'],
                    'GASTO' => $row['GASTO'],
                ];
            }
            return $GastoPorMes;
        } else {
            return [];
        }
    }
}
