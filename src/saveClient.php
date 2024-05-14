<?php

require './db/db_connection.php';
require 'specFuncs.php';

$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$uuid = guidv4();
$date = getActualDate();

$sql = "INSERT INTO clientes (id, nombre, a_paterno, a_materno, telefono, correo, fecha_afiliacion)
        VALUES ('$uuid', '$nombre', '$a_paterno', '$a_materno', '$telefono', '$correo', '$date')";

try {
    $query = $db->prepare($sql);
    // Ejecutar la consulta
    $query->execute();
} catch (PDOException $e) {
    echo "Error al insertar en la base de datos: " . $e->getMessage();
}

header('Location: index.php');

?>