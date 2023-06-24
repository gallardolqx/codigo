<?php
$servername = "localhost";  // Cambia "localhost" si el servidor de la base de datos está en un host diferente
$username = "tu_usuario";   // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = "tu_contraseña"; // Cambia "tu_contraseña" por tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos";  // Cambia "nombre_de_tu_base_de_datos" por el nombre de tu base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Datos para la actualización
$id = 1;
$nombre = "John Doe";
$email = "johndoe@example.com";

// Consulta UPDATE
$sql = "UPDATE tu_tabla SET nombre='$nombre', email='$email' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>