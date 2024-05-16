<?php
include './db/db_connection.php';

if (isset($_POST['id'])) {

    // Asignar valores de $_POST a variables
    $id = $_POST['id'];

    // Consulta SQL para ventas
    $sql = "SELECT nombre, descripcion, precio FROM productos WHERE id = ? LIMIT 1";

    try {
        // Preparar y ejecutar la primera consulta
        $query = $db->prepare($sql);
        $query->execute([$id]);
        
        $producto = [];
        $producto = $query->fetch(PDO::FETCH_ASSOC);

        echo json_encode($producto, JSON_UNESCAPED_UNICODE);
    } catch (PDOException $e) {
        echo "Error al insertar en la base de datos: " . $e->getMessage();
    }
} else {
    echo "Faltan datos POST requeridos"; // Manejo de error si faltan datos POST
}

?>