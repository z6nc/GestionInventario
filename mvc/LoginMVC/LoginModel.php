<?php
// User.php (Modelo)
require_once '../BD/Conexion.php'; // Incluye tu archivo de conexión
class LoginModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    function validateUser($username, $password) {
        $sql = "SELECT IDUSUARIO, CONTRASEÑA FROM USUARIO WHERE USUARIO = ? AND CONTRASEÑA = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return true; // Usuario encontrado
        } else {
            return false; // Usuario no encontrado
        }
    }
    
   

}
?>
