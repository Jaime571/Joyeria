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
                        <a class="nav-link" href="index.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="providers.php">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ventas.php">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalNewProd">
                            <i class="fa-duotone fa-circle-plus"></i>
                            Agregar
                        </a>
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
            <h1>Productos</h1>
        </div>
        <hr>
        <!-- Deck de cartas de los clientes -->
        <?php
        include_once './db/db_connection.php';
        include_once './db/queries.php';

        // Preparar la consulta
        $productos = $db->prepare($getAllProducts);
        // Ejecutar la consulta
        $productos->execute();
        // Recuperar los resultados como un arreglo asociativo
        $rows = $productos->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="d-flex flex-wrap text-center">
            <?php foreach ($rows as $row) { ?>
                <div class="card m-2" style="width: 21rem;" id="<?php echo $row['id']; ?>">
                    <div class="card-body shadow">
                        <h3 class="card-title"><?php echo $row['nombre'] ?></h3>
                        <hr>
                        <!-- <h5 class="mb-5"> -->
                        <p class="mb-1">
                            <?php echo $row['descripcion'] ?>
                        </p>
                        <!-- </h5> -->
                        <br>
                        <span class="badge text-bg-primary align-bottom"><?php echo $row['precio'] ?></span>
                        <br>
                    </div>
                    <a class="btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#modalEditProd" data-bs-id="<?= $row['id'] ?>">
                        <i class="fa-duotone fa-circle-plus"></i>
                        Editar
                    </a>
                    <!-- <button class="btn text-bg-info open-modal" data-id="<?php echo $row['id']; ?>">Editar Producto</button> -->
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include('modalEditProd.php'); ?>
    <?php include 'modalNewProd.php'; ?>
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