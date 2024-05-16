<?php
require './db/db_connection.php';
require 'specFuncs.php';

$id = $_POST['id'];

$sql = "UPDATE productos SET estatus = 'NO DISPONIBLE' WHERE id = '$id'";

try {
    $consulta = $db->prepare($sql);
    $consulta->execute();
    header('Location: productos.php');
} catch (PDOException $e) {
    echo $id;
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}
?>
