
<?php
class CategoriasModel
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function ListarCategorias1()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 1"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias2()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 2"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias3()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 3"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias4()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 4"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias5()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 5"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias6()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 6"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias7()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 7"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias8()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 8"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias9()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 9"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias10()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 10"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias11()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 11"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias12()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 12"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias13()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 13"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias14()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 14"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias15()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 15"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
    function ListarCategorias16()
    {
        $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria = 16"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ResultadoCategorias[] = [
                    'IDPRODUCTO' => $row['IDPRODUCTO'],
                    'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                    'STOCK' => $row['STOCK'],
                    'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                    'idCategoria' => $row['idCategoria'],
                ];
            }
            return $ResultadoCategorias;
        } else {
            return [];
        }
    }
}


?>