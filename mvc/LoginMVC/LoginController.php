<?php
require_once '../LoginMVC/LoginModel.php'; // Incluye
require_once '../BD/Conexion.php'; // Incluye tu archivo de conexión
$userModel = new LoginModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Usuario'];
    $password = $_POST['Contraseña'];

    $result = $userModel->validateUser($username , $password, $conn);
    if ($result === true) {
       header('Location: ../../src/inicio.php');
    } else{
       header('Location: ../../src/login.html?error=InvalidedYourUserOrPassword');

    }

    $conn->close();
     
}



?>