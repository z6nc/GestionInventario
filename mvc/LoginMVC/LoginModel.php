<?php
// User.php (Modelo)
include '../BD/Conexion.php'; 
class LoginModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function validateUser($username, $password) {
        $sql = "SELECT IDUSUARIO, NOMBRE, CONTRASEÑA FROM USUARIO WHERE USUARIO = ? AND CONTRASEÑA = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['USUARIO'] = $row['NOMBRE'];
            return  true ;// Usuario encontrado
        } else {
            return false; // Usuario no encontrado
        }
    }
    
   
 
}
?>
