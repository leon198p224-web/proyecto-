<?php
/**
 * Archivo: php/register_appointment.php
 * Descripción: Recibe los datos de la cita y los guarda en la base de datos.
 */
require_once("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del formulario
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $descripcion = $_POST['descripcion'];

    // Insertamos en la tabla 'citas'
    $sql = "INSERT INTO citas (fecha, hora, descripcion) VALUES ('$fecha', '$hora', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Cita agendada con éxito</h2>";
        echo "<p>La cita para el día $fecha a las $hora ha sido registrada.</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } else {
        echo "Error al agendar: " . $conn->error;
    }
}
?>