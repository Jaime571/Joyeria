<?php
// Obtener todas las peliculas
$getAllClients = "SELECT * FROM clientes";
$getAllProducts = "SELECT * FROM productos";
$getAllBoughts = "SELECT * FROM compras";
$getAllProviders = "SELECT * FROM proveedores";
$getAllSells = "SELECT * FROM venta";
$getAllClientBill = "SELECT * FROM factura_clientes";
$getAllProvidersBill = "SELECT * FROM factura_proveedores";

$getProductsWithCostMoreThan100 = "SELECT nombre, precio FROM productos WHERE precio > '$100'";

$getAllBoughtsFromAClient = "SELECT 
                                clientes.nombre AS nombre,
                                clientes.fecha_afiliacion AS fecha_afiliacion,
                                venta.fecha AS fecha_venta,
                                venta.tipo_pago AS pago
                            FROM 
                                venta
                            INNER JOIN 
                                clientes ON venta.cliente_id = clientes.id
                            WHERE
                                venta.cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04'";

$getAllSellsFromAProvider = "SELECT 
                                proveedores.nombre AS nombre,
                                proveedores.direccion AS direccion,
                                compras.fecha AS fecha_compra,
                                compras.tipo_pago AS pago
                            FROM 
                                compras
                            INNER JOIN 
                                proveedores ON compras.proveedor_id = proveedores.id
                            WHERE
                                compras.proveedor_id = 'aac88d5f-d43e-4b79-ab69-c46abd6f9571'";

$getAllProductsFromSellsOfAProvider = "SELECT 
                                        proveedores.nombre AS nombre,
                                        proveedores.correo AS correo,
                                        compras.fecha AS fecha_compra,
                                        compras.tipo_pago AS pago,
                                        productos.nombre AS nombre_prod,
                                        productos.precio AS precio
                                    FROM 
                                        compras
                                    INNER JOIN 
                                        proveedores ON compras.proveedor_id = proveedores.id
                                    INNER JOIN 
                                        factura_proveedores ON compras.id = factura_proveedores.compra_id
                                    INNER JOIN 
                                        productos ON factura_proveedores.producto_id = productos.id
                                    WHERE
                                        compras.proveedor_id = 'aac88d5f-d43e-4b79-ab69-c46abd6f9571'";

$getAllProductsFromBoughtOfAClient = "SELECT 
                                        clientes.nombre AS nombre,
                                        clientes.correo AS correo,
                                        venta.fecha AS fecha_compra,
                                        venta.tipo_pago AS pago,
                                        productos.nombre AS nombre_prod,
                                        productos.precio AS precio
                                    FROM 
                                        venta
                                    INNER JOIN 
                                        clientes ON venta.cliente_id = clientes.id
                                    INNER JOIN 
                                        factura_clientes ON venta.id = factura_clientes.venta_id
                                    INNER JOIN 
                                        productos ON factura_clientes.producto_id = productos.id
                                    WHERE
                                        venta.cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04'";

$minimumProductCost = "SELECT nombre, precio
                        FROM productos
                        WHERE precio = (SELECT MIN(precio) FROM productos);";

$maximumProductCost = "SELECT nombre, precio
                        FROM productos
                        WHERE precio = (SELECT MAX(precio) FROM productos);";

$avgCostOfProducts = "SELECT AVG(CAST(precio AS DECIMAL(18, 2))) AS precio_promedio FROM productos";

$totalBoughtsOfClient = "SELECT COUNT(*) AS total_ventas_cliente FROM venta WHERE cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04'";

$totalOfProducts = "SELECT SUM(precio) AS total_ventas FROM productos";

?>
