<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comentarios_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener comentarios
$sql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comentario'>";
        echo "<h5>" . htmlspecialchars($row['nombre']) . "</h5>";
        echo "<p>" . htmlspecialchars($row['comentario']) . "</p>";
        echo "<small class='text-muted'>" . $row['fecha'] . "</small>";
        echo "</div><hr>";
    }
} else {
    echo "<p>No hay comentarios aún. ¡Sé el primero en comentar!</p>";
}

$conn->close();
?>
