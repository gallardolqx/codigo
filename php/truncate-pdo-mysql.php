<?php
$servername = "localhost";  // Cambia "localhost" si el servidor de la base de datos está en un host diferente
$username = "tu_usuario";   // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = "tu_contraseña"; // Cambia "tu_contraseña" por tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos";  // Cambia "nombre_de_tu_base_de_datos" por el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Nombre de la tabla a truncar
    $tabla = "tu_tabla";

    // Consulta TRUNCATE
    $sql = "TRUNCATE TABLE $tabla";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Tabla truncada correctamente";
    } else {
        echo "Error al truncar la tabla";
    }

    // Cerrar la conexión
    $conn = null;
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}
?>