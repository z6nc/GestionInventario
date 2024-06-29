
<?php
class CategoriasModel
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    function CategoriasArray()
    {
        $sql = "SELECT idCategoria, nomCat FROM categoria";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $opciones = "";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $opciones .= "<option value='" . $row["idCategoria"] . "'>" . $row["nomCat"] . "</option>";
            }
            return $opciones;
        } else {
            $opciones = "<option value=''>No hay datos disponibles</option>";
            return $opciones;
        }
    }
    function CheckCategoriaName($NombreCategoria) {
        $sql = "SELECT nomCat FROM categoria WHERE nomCat = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("s", $NombreCategoria);
        $stmt->execute();
        $stmt->store_result();
        $existingCategoriaName= "";
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($existingCategoriaName);
            $stmt->fetch();
            $stmt->close();
            return $existingCategoriaName;
        }
        $stmt->close();
        return null;
    }
    
    function InsertCategoria($NombreCategoria) {
        $sql = "INSERT INTO categoria (nomCat) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("s", $NombreCategoria);
        $executeResult = $stmt->execute();
        $stmt->close();
        return $executeResult;
    }

    function DeleteCategoria($NombreCategoria) {
        $sql = "DELETE FROM categoria WHERE nomCat = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("s", $NombreCategoria);
        $executeResult = $stmt->execute();
        $stmt->close();
        return $executeResult;
    }
}