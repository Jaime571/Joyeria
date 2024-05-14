<?php

require './db/db_connection.php'; // Asegúrate de que esta ruta sea correcta
require 'specFuncs.php'; // Asegúrate de incluir las funciones necesarias

// Verificar si todas las variables POST esperadas están definidas
if (isset($_POST['id_proveedor'], $_POST['id_producto'], $_POST['cantidad'], $_POST['tipo_pago'])) {
    
    // Asignar valores de $_POST a variables
    $id_proveedor = $_POST['id_proveedor'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $tipo_pago = $_POST['tipo_pago'];
    
    // Generar UUIDs y obtener la fecha actual
    $uuidVentas = guidv4(); // Asegúrate de tener esta función definida
    $uuidFactura = guidv4(); // Asegúrate de tener esta función definida
    $date = getActualDate(); // Asegúrate de tener esta función definida

    // Consulta SQL para compras
    $sql1 = "INSERT INTO compras (id, fecha, tipo_pago, proveedor_id)
             VALUES (?, ?, ?, ?)";
    
    // Consulta SQL para factura_proveedores
    $sql2 = "INSERT INTO factura_proveedores (id, producto_id, compra_id, cantidad)
             VALUES (?, ?, ?, ?)";

    try {
        // Preparar y ejecutar la primera consulta
        $query1 = $db->prepare($sql1);
        $query1->execute([$uuidVentas, $date, $tipo_pago, $id_cliente]);

        // Preparar y ejecutar la segunda consulta
        $query2 = $db->prepare($sql2);
        $query2->execute([$uuidFactura, $id_producto, $uuidVentas, $cantidad]);

        // Redireccionar después de las inserciones exitosas
        header('Location: ventas.php');
        exit; // Importante: salir del script después de redireccionar

    } catch (PDOException $e) {
        echo "Error al insertar en la base de datos: " . $e->getMessage();
    }
} else {
    echo "Faltan datos POST requeridos"; // Manejo de error si faltan datos POST
}
?>
