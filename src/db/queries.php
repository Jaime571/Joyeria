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

$getAllBoughtsFromClients = "SELECT 
                                clientes.nombre AS nombre,
                                -- clientes.fecha_afiliacion AS fecha_afiliacion,
                                venta.fecha AS fecha_venta,
                                venta.tipo_pago AS pago,
                                factura_clientes.cantidad AS cantidad,
                                productos.nombre AS nombre_prod,
                                productos.precio AS unitario,
                                factura_clientes.cantidad * productos.precio AS precio_total
                            FROM 
                                venta
                            INNER JOIN 
                                clientes ON venta.cliente_id = clientes.id
                            INNER JOIN 
                                factura_clientes ON venta.id = factura_clientes.venta_id
                            INNER JOIN 
                                productos ON factura_clientes.producto_id = productos.id
                            ORDER BY fecha_venta ASC";

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

$getAllSellsFromProviders = "SELECT 
                                proveedores.nombre AS nombre,
                                -- clientes.fecha_afiliacion AS fecha_afiliacion,
                                compras.fecha AS fecha_compra,
                                compras.tipo_pago AS pago,
                                factura_proveedores.cantidad AS cantidad,
                                productos.nombre AS nombre_prod,
                                productos.precio AS unitario,
                                factura_proveedores.cantidad * productos.precio AS precio_total
                            FROM 
                                compras
                            INNER JOIN 
                                proveedores ON compras.proveedor_id = proveedores.id
                            INNER JOIN 
                                factura_proveedores ON compras.id = factura_proveedores.compra_id
                            INNER JOIN 
                                productos ON factura_proveedores.producto_id = productos.id
                            ORDER BY fecha_compra ASC";

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
                        WHERE precio = (SELECT MIN(precio) FROM productos)";

$minCost = "SELECT * FROM min_cost";

$maximumProductCost = "SELECT nombre, precio FROM productos WHERE precio = (SELECT MAX(precio) FROM productos)";

$maxCost = "SELECT * FROM max_cost";

$avgCostOfProducts = "SELECT AVG(CAST(precio AS DECIMAL(18, 2))) AS precio_promedio FROM productos";

$avgCost = "SELECT * FROM avg_cost";

$totalBoughtsOfClient = "SELECT COUNT(*) AS total_ventas_cliente FROM venta WHERE cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04'";

$totalOfProducts = "SELECT SUM(precio) AS total_ventas FROM productos";
