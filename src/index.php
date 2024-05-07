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
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Facturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="tarea.php">Tarea</a>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
        </nav>
    </div>
    <div class="container">
        <!-- Tarjeta de ubicacion -->
        <div class="text-center">
            <h1>¡Hola!, te encuentras en:</h1>
            <h1>Clientes</h1>
        </div>
        <hr>
        <!-- Deck de cartas de los clientes -->
        <?php
        include_once './db/db_connection.php';
        include_once './db/queries.php';

        // Preparar la consulta
        $clientes = $db->prepare($getAllClients);
        // Ejecutar la consulta
        $clientes->execute();
        // Recuperar los resultados como un arreglo asociativo
        $rows = $clientes->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="d-flex flex-wrap text-center">
            <?php foreach ($rows as $row) { ?>
                <div class="card m-2" style="width: 18rem;" id="<?php echo $row['id']; ?>">
                    <div class="card-body shadow">
                        <h5 class="card-title">
                            <?php echo $row['nombre'] ?>
                            <?php echo $row['a_paterno'] ?>
                            <?php echo $row['a_materno'] ?>
                        </h5>
                        <p class="card-text">
                            <b>Fecha de afiliación:</b>
                            <?php echo  $row['fecha_afiliacion']; ?>
                        </p>
                        <button class="btn btn-primary open-modal" data-id="<?php echo $row['id']; ?>">Info</button>
                    </div>
                </div>
                <?php include('modalClientInfo.php'); ?>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Script para mostrar el modal al hacer clic en el botón
        document.querySelectorAll('.open-modal').forEach(button => {
            button.addEventListener('click', () => {
                const clientId = button.getAttribute('data-id');
                const modal = document.getElementById('Detalles' + clientId);
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();
            });
        });
    </script>
</body>

</html>