<?php
// TODO:Terminar Editar producto
require './db/db_connection.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET (id, nombre, descripcion, precio)
        VALUES ('$uuid', '$nombre', '$descripcion', $precio)
        WHERE id = ''";

try {
    $query = $db->prepare($sql);
    // Ejecutar la consulta
    $query->execute();
} catch (PDOException $e) {
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}

header('Location: productos.php');

?>
