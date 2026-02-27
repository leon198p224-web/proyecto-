<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "127.0.0.1";
$user = "root";
$pass = "abcd123456789";  // <- su contraseña aquí
$db = "proyecto_web";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>