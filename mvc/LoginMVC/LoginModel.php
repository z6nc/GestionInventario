<?php
// User.php (Modelo)
include '../BD/Conexion.php'; 
session_start();
class LoginModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function validateUser($username, $password) {
        $sql = "SELECT IDUSUARIO, NOMBRE, APELLIDO, CONTRASEÑA, jerarquia.JERARQUIA
        FROM USUARIO
        INNER JOIN jerarquia ON jerarquia.IDJERARQUIA = usuario.IDJERARQUIA
        WHERE USUARIO = ? AND CONTRASEÑA = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['USUARIO'] = $row['NOMBRE'];
            $_SESSION['APELLIDO'] = $row['APELLIDO'];
            $_SESSION['JERARQUIA'] = $row['JERARQUIA'];

            return  true ;// 
        } else {
            return false; // 
        }
    }
    function VerificarJerarquia($username){
        $sql = "SELECT jerarquia.JERARQUIA
                FROM USUARIO
                INNER JOIN jerarquia ON jerarquia.IDJERARQUIA = USUARIO.IDJERARQUIA
                WHERE USUARIO = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $ResultadoJerarquia = $stmt->get_result();
    
        if ($ResultadoJerarquia->num_rows > 0) {
            $row = $ResultadoJerarquia->fetch_assoc();
            if ($row['JERARQUIA'] === 'ADMINISTRADOR') {
                return true;
            } else {
                return false;
            }
        } else {
            return false; 
        }
    }
    
    
   
 
}
?>
