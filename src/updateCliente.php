<?php
require './db/db_connection.php';
require 'specFuncs.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE clientes SET nombre = '$nombre', a_paterno = '$a_paterno', a_materno = '$a_materno', telefono = '$telefono', correo = '$correo' WHERE id = '$id'";

try {
    $consulta = $db->prepare($sql);
    $consulta->execute();
    header('Location: index.php');
} catch (PDOException $e) {
    echo $id;
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}
?>
