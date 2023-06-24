<?php
$servername = "localhost";  // Cambia "localhost" si el servidor de la base de datos está en un host diferente
$username = "tu_usuario";   // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = "tu_contraseña"; // Cambia "tu_contraseña" por tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos";  // Cambia "nombre_de_tu_base_de_datos" por el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Datos para la actualización
    $id = 1;
    $nombre = "John Doe";
    $email = "johndoe@example.com";

    // Consulta UPDATE
    $sql = "UPDATE tu_tabla SET nombre=:nombre, email=:email WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro";
    }

    // Cerrar la conexión
    $conn = null;
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}
?>