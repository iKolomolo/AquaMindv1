<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "AquamindBD";

$conn = new mysqli($servername, $username, $password, $database);

// Verifica si la conexión es correcta
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>