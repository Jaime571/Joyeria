<?php

require './db/db_connection.php';
require 'specFuncs.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$uuid = guidv4();

$sql = "INSERT INTO productos (id, nombre, descripcion, precio)
        VALUES ('$uuid', '$nombre', '$descripcion', $precio)";

try {
    $query = $db->prepare($sql);
    // Ejecutar la consulta
    $query->execute();
} catch (PDOException $e) {
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}

header('Location: productos.php');

?>
