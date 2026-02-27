<?php
require_once("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // Seguridad requerida: SHA1

    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Usuario registrado correctamente</h2>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>