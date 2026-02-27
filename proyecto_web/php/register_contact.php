<?php
/**
 * Archivo: register_contact.php
 * Descripción: Guarda los datos de la tabla contactos.
 */
require_once("../config/database.php");

// Verificamos que los datos lleguen por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Preparamos la consulta SQL
    $sql = "INSERT INTO contactos (nombre, telefono, email) 
            VALUES ('$nombre', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Contacto guardado correctamente</h2>";
        echo "<a href='../views/contacts.html'>Registrar otro contacto</a> | ";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } else {
        echo "Error al guardar: " . $conn->error;
    }
}
?>