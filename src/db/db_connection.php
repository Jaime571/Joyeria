<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$port = '5432';        // Host de la base de datos (generalmente localhost)
$dbname = 'joyeria';   // Nombre de la base de datos
$user = 'postgres';       // Nombre de usuario de la base de datos
$password = 'admin';           // Contraseña del usuario

try {
    // Crear una nueva instancia de conexión PDO
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

    // Habilitar el manejo de errores de PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Establecer el juego de caracteres a UTF-8
    $db->exec("SET NAMES 'utf8'");

    // Opcional: definir otras configuraciones de PDO si es necesario
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
