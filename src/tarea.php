<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>



    <?php
    include('./db/db_connection.php');
    include('./db/queries.php');
    ?>
    <div class="container">
        <div>
            <h1>SELECT * FROM clientes</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllClients);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de Afiliacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['a_paterno']?></td>
                            <td><?php echo $row['a_materno']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['fecha_afiliacion']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM compras</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllBoughts);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de pago</th>
                        <th scope="col">Id Proveedor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['fecha']?></td>
                            <td><?php echo $row['tipo_pago']?></td>
                            <td><?php echo $row['proveedor_id']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM facturas_clientes</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllClientBill);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Id Venta</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['producto_id']?></td>
                            <td><?php echo $row['venta_id']?></td>
                            <td><?php echo $row['cantidad']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM facturas_proovedores</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllProvidersBill);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Id Compra</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['producto_id']?></td>
                            <td><?php echo $row['compra_id']?></td>
                            <td><?php echo $row['cantidad']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM proveedores</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllProviders);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['direccion']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td><?php echo $row['correo']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM productos</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllProducts);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['precio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM ventas</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllSells);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de pago</th>
                        <th scope="col">Id Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['fecha']?></td>
                            <td><?php echo $row['tipo_pago']?></td>
                            <td><?php echo $row['cliente_id']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT * FROM facturas_clientes</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllClientBill);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Id Venta</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['producto_id']?></td>
                            <td><?php echo $row['venta_id']?></td>
                            <td><?php echo $row['cantidad']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
        <div>
            <h1>SELECT 
                    clientes.nombre AS nombre,
                    clientes.fecha_afiliacion AS fecha_afiliacion,
                    venta.fecha AS fecha_venta,
                    venta.tipo_pago AS pago
                FROM 
                    venta
                INNER JOIN 
                    clientes ON venta.cliente_id = e486c44f-513c-4911-a59f-8ff19d73a0b4</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllBoughtsFromAClient);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha Afiliacion</th>
                        <th scope="col">Fecha Venta</th>
                        <th scope="col">Tipo Pago</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['fecha_afiliacion']?></td>
                            <td><?php echo $row['fecha_venta']?></td>
                            <td><?php echo $row['pago']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT 
                    clientes.nombre AS nombre,
                    clientes.fecha_afiliacion AS fecha_afiliacion,
                    venta.fecha AS fecha_venta,
                    venta.tipo_pago AS pago
                FROM 
                    venta
                INNER JOIN 
                    clientes ON venta.cliente_id = e486c44f-513c-4911-a59f-8ff19d73a0b4</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllSellsFromAProvider);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Fecha Compara</th>
                        <th scope="col">Tipo Pago</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['direccion']?></td>
                            <td><?php echo $row['fecha_compra']?></td>
                            <td><?php echo $row['pago']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT 
                    proveedores.nombre AS nombre,
                    proveedores.correo AS correo,
                    compras.fecha AS fecha_compra,
                    compras.tipo_pago AS pago
                    productos.nombre AS nombre_prod
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
                    compras.proveedor_id = 'aac88d5f-d43e-4b79-ab69-c46abd6f9571'</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllProductsFromSellsOfAProvider);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha Compara</th>
                        <th scope="col">Tipo Pago</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['fecha_compra']?></td>
                            <td><?php echo $row['pago']?></td>
                            <td><?php echo $row['nombre_prod']?></td>
                            <td><?php echo $row['precio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT 
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
                    factura_clientes ON venta.id = factura_clientes.compra_id
                INNER JOIN 
                    productos ON factura_clientes.producto_id = productos.id
                WHERE
                    venta.cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04''</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($getAllProductsFromBoughtOfAClient);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha Compara</th>
                        <th scope="col">Tipo Pago</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['fecha_compra']?></td>
                            <td><?php echo $row['pago']?></td>
                            <td><?php echo $row['nombre_prod']?></td>
                            <td><?php echo $row['precio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT nombre, precio FROM productos WHERE precio = (SELECT MIN(precio) FROM productos);</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($minimumProductCost);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['precio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT nombre, precio FROM productos WHERE precio = (SELECT MAX(precio) FROM productos);</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($maximumProductCost);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['precio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT AVG(CAST(precio AS DECIMAL(18, 2))) AS precio_promedio FROM productos;</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($avgCostOfProducts);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Costo Promeedio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['precio_promedio']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT COUNT(*) AS total_ventas_cliente FROM ventas WHERE cliente_id = '63c75719-f4cd-4302-a25d-8dda2dc65f04';</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($totalBoughtsOfClient);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Ttoal Compras</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['total_ventas_cliente']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>SELECT SUM(precio) AS total_ventas FROM productos;</h1>
            <?php
            // Preparar la consulta
            $clientes = $db->prepare($totalOfProducts);
            // Ejecutar la consulta
            $clientes->execute();
            // Recuperar los resultados como un arreglo asociativo
            $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Ttoal Productos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row['total_ventas']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>