<?php
require_once '../mvc/BD/Conexion.php'; 
session_start();
$idusuario = $_SESSION['USUARIO'];
if (!isset($idusuario)) {
    header('Location: ../mvc/login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap">
    <link rel="stylesheet" href="css/EstilosPrincipal.css">
  l
    <title>Document</title>
</head>
<body>
<h1 class=""><?php echo $idusuario ?></h1>
 <h1>hola mundi</h1>
</body>
</html>