<?php
function guidv4($data = null)
{
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function getActualDate() {
    // Obtener la fecha actual en formato YYYY-MM-DD
    $fecha_actual = date("Y-m-d");
    return $fecha_actual;
}

function parseToInt($montoString) {
    // Eliminar el signo de peso ($) del string
    $montoSinSigno = str_replace('$', '', $montoString);

    // Eliminar caracteres no numéricos excepto el punto decimal
    $montoSoloNumeros = preg_replace('/[^0-9.]/', '', $montoSinSigno);

    // Convertir el string a un número de punto flotante (float)
    $montoFlotante = (float) $montoSoloNumeros;

    // Redondear el número flotante y convertirlo a entero
    $montoEntero = intval(round($montoFlotante));

    // Retornar el monto entero
    return $montoEntero;
}
