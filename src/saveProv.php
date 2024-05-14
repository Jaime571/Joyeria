<?php

require './db/db_connection.php';
require 'specFuncs.php';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$uuid = guidv4();

$sql = "INSERT INTO proveedores (id, nombre, direccion, telefono, correo)
        VALUES ('$uuid', '$nombre', '$direccion', '$telefono', '$correo')";

try {
    $query = $db->prepare($sql);
    // Ejecutar la consulta
    $query->execute();
} catch (PDOException $e) {
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}

header('Location: providers.php');

?>