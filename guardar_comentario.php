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

// Guardar comentario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $comentario = $conn->real_escape_string($_POST['comentario']);

    $sql = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre', '$comentario')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html#comentarios");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
