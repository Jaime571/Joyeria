<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Joyería</title>
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Joyería Artesanal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
                <ul class="nav justify-content-center ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="providers.php">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalNewCompra">
                            <i class="fa-duotone fa-circle-plus"></i>
                            Registrar Compra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalNewVenta">
                            <i class="fa-duotone fa-circle-plus"></i>
                            Registrar Venta
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-danger" href="tarea.php">Tarea</a>
                    </li> -->
                </ul>
                <!-- </div> -->
            </div>
        </nav>
    </div>
    <div class="container">
        <!-- Tarjeta de ubicacion -->
        <div class="text-center">
            <h1>¡Hola!, te encuentras en:</h1>
            <h1>Estadísticas</h1>
        </div>
        <hr>
        <div class="row " style="height: 350px; border: none;">
            <div class="col-md-6 mb-3">
                <a class="btn btn-success w-100 h-100 fs-1" style="background-image: linear-gradient(to right, #2bbfe4, #eaecc6); padding-top: 130px;" href="#" data-bs-toggle="modal" data-bs-target="#modalResumenVentas">
                    <i class="fa-duotone fa-circle-plus"></i>
                    Resumen Ventas
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a class="btn btn-success w-100 h-100 fs-1" style="background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(0,52,255,1) 100%); padding-top: 130px;" href="#" data-bs-toggle="modal" data-bs-target="#modalResumenCompras">
                    <i class="fa-duotone fa-circle-plus"></i>
                    Resumen Compras
                </a>
            </div>
        </div>
    </div>
    <?php
    include './db/db_connection.php';
    include './db/queries.php';

    $queryClients = $db->prepare($getAllClients);
    $queryClients->execute();
    $rows = $queryClients->fetchAll(PDO::FETCH_ASSOC);

    $queryProds = $db->prepare($getAllProducts);
    $queryProds->execute();
    $rowsProd = $queryProds->fetchAll(PDO::FETCH_ASSOC);

    $queryProv = $db->prepare($getAllProviders);
    $queryProv->execute();
    $rowsProv = $queryProv->fetchAll(PDO::FETCH_ASSOC);
    
    $queryVentasClientes = $db->prepare($getAllBoughtsFromClients);
    $queryVentasClientes->execute();
    $rowsVentasClientes = $queryVentasClientes->fetchAll(PDO::FETCH_ASSOC);

    $queryComprasProv = $db->prepare($getAllSellsFromProviders);
    $queryComprasProv->execute();
    $rowsComprasProv = $queryComprasProv->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php include 'modalNewVenta.php'; ?>
    <?php include 'modalNewCompra.php'; ?>
    <?php include 'modalResumenVentas.php'; ?>
    <?php include 'modalResumenCompras.php'; ?>
    <script>
        // Script para mostrar el modal al hacer clic en el botón
        // document.querySelectorAll('.open-modal').forEach(button => {
        //     button.addEventListener('click', () => {
        //         const clientId = button.getAttribute('data-id');
        //         const modal = document.getElementById('Detalles' + clientId);
        //         const bsModal = new bootstrap.Modal(modal);
        //         bsModal.show();
        //     });
        // });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>