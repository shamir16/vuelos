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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Botón de Volver Atrás</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Agrega otro Vuelo</h1>
        <!-- Botón de volver atrás -->
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="back-button">Volver Atrás</a>
    </div>
</body>
</html>