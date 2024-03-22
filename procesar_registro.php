<?php
include 'conexion.php'; // Incluir el archivo de conexión

// Obtener datos del formulario
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$duracion = $_POST['duracion'];
$precio = $_POST['precio'];

// Preparar la consulta SQL
$sql = "INSERT INTO vuelos (origen, destino, fecha, hora, duracion, precio) 
        VALUES ('$origen', '$destino', '$fecha', '$hora', '$duracion', '$precio')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error al registrar el vuelo: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>