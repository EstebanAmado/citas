<?php
$servername = "localhost";  // Cambia a tu host de MySQL si es diferente
$username = "root";         // Cambia al nombre de usuario de tu base de datos
$password = "";             // Cambia a la contraseña de tu base de datos
$dbname = "optica";  // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>