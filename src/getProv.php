<?php
include './db/db_connection.php';

if (isset($_POST['id'])) {

    // Asignar valores de $_POST a variables
    $id = $_POST['id'];

    // Consulta SQL para ventas
    $sql = "SELECT nombre, direccion, telefono, correo FROM proveedores WHERE id = ? LIMIT 1";

    try {
        // Preparar y ejecutar la primera consulta
        $query = $db->prepare($sql);
        $query->execute([$id]);
        
        $cliente = [];
        $cliente = $query->fetch(PDO::FETCH_ASSOC);

        echo json_encode($cliente, JSON_UNESCAPED_UNICODE);
    } catch (PDOException $e) {
        echo "Error al obtener de la base de datos: " . $e->getMessage();
    }
} else {
    echo "Faltan datos POST requeridos"; // Manejo de error si faltan datos POST
}

?>