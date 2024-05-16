<?php
require './db/db_connection.php';
require 'specFuncs.php';

$id = $_POST['id'];

$sql = "UPDATE clientes SET estatus = 'INACTIVO' WHERE id = '$id'";

try {
    $consulta = $db->prepare($sql);
    $consulta->execute();
    header('Location: index.php');
} catch (PDOException $e) {
    echo $id;
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}
?>
