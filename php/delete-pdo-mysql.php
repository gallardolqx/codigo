<?php
$servername = "localhost";  // Cambia "localhost" si el servidor de la base de datos está en un host diferente
$username = "tu_usuario";   // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = "tu_contraseña"; // Cambia "tu_contraseña" por tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos";  // Cambia "nombre_de_tu_base_de_datos" por el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ID del registro a eliminar
    $id = 1;

    // Consulta DELETE
    $sql = "DELETE FROM tu_tabla WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro";
    }

    // Cerrar la conexión
    $conn = null;
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}
?>