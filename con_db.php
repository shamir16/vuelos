<?php
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en localhost
$username = "root";
$password = "";
$dbname = "vuelos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
