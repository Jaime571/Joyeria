<?php
require './db/db_connection.php';
require 'specFuncs.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = parseToInt($_POST['precio']);

$sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio WHERE id = '$id'";

try {
    $consulta = $db->prepare($sql);
    $consulta->execute();
    header('Location: productos.php');
} catch (PDOException $e) {
    echo $id;
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}
?>
