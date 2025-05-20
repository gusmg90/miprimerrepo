<?php
$servername = "localhost"; // Dirección del servidor MySQL
$username = "root"; // Nombre de usuario de la base de datos
$password = "gustavo_2025"; // Contraseña de la base de datos
$dbname = "dbprod"; // Nombre de la base de datos
$api_key = "gustavo_2025iusoqieysdlilopoas-lisqpi";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>