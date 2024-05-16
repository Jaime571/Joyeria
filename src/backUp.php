<?php

require './db/db_connection.php';

$hostname = 'localhost';
$username = 'postgres  ';
$password = 'admin';
$database = 'joyeria';

// Ruta donde se guardará el archivo de respaldo (debe ser accesible por el usuario que ejecuta PHP)
$backupFilePath = 'C:/xampp\htdocs\SeminarioBD\src\respaldo.sql';

// Comando para generar el respaldo usando pg_dump
$command = "pg_dump -U postgres -d joyeria -F tar -f C:/xampp/htdocs/SeminarioBD/src/respaldo.tar";

// Ejecutar el comando para generar el respaldo
$output = [];
$returnCode = 0;
exec($command, $output, $returnCode);

// Verificar si el respaldo se realizó correctamente
if ($returnCode === 0) {
    echo "Respaldo de la base de datos realizado correctamente.";
} else {
    echo "Error al realizar el respaldo de la base de datos.";
    // Mostrar detalles del error si es necesario
    var_dump($output);
}

?>