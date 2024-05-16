<?php
require './db/db_connection.php';
require 'specFuncs.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE proveedores SET nombre = '$nombre', direccion = '$direccion', telefono = '$telefono', correo = '$correo' WHERE id = '$id'";

try {
    $consulta = $db->prepare($sql);
    $consulta->execute();
    header('Location: providers.php');
} catch (PDOException $e) {
    echo $id;
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}
?>
