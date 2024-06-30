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
        $sql = "SELECT p.NOM_PRODUCTO, t.STOCK, p.URL_IMG
        FROM transacciones t
        INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
        WHERE t.ESTADO = 'Revisado' OR t.ESTADO = 'Pendiente'
        ORDER BY t.STOCK DESC
        LIMIT 4;";
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
    function ProductosPocoStock(){
        $sql = "SELECT p.NOM_PRODUCTO, t.STOCK, p.URL_IMG
            FROM transacciones t
            INNER JOIN producto p ON t.IDPRODUCTO = p.IDPRODUCTO
            WHERE t.ESTADO = 'Revisado' OR t.ESTADO = 'Pendiente'
            ORDER BY t.STOCK ASC
            LIMIT 4;";
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
        MONTH(FECHA_COMPRA) AS Mes,
        YEAR(FECHA_COMPRA) AS Año,
        SUM(MONTO_TOTAL) AS GastoPorMes
    FROM transacciones 
    WHERE FECHA_COMPRA >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
    GROUP BY YEAR(FECHA_COMPRA), MONTH(FECHA_COMPRA)
    ORDER BY Año ASC, Mes ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $GastoPorMes = [];
            while ($row = $result->fetch_assoc()) {
                $GastoPorMes[] = [
                    'MES' => $row['Mes'],
                    'AÑO' => $row['Año'],
                    'GASTO' => $row['GastoPorMes'],
                ];
            }
            return $GastoPorMes;
        } else {
            return [];
        }
    }
}
