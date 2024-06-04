<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_restaurante";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
     echo "Conexión fallida";
} else {
    echo "Conexión exitosa";
}

?>