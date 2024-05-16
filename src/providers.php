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
                        <a class="nav-link  active" href="#">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ventas.php">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalNewProv">
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
            <h1>Proveedores</h1>
        </div>
        <hr>
        <!-- Deck de cartas de los clientes -->
        <?php
        include_once './db/db_connection.php';
        include_once './db/queries.php';

        // Preparar la consulta
        $productos = $db->prepare($getAllProviders);
        // Ejecutar la consulta
        $productos->execute();
        // Recuperar los resultados como un arreglo asociativo
        $rows = $productos->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="d-flex flex-wrap text-center">
            <?php foreach ($rows as $row) { ?>
                <div class="card m-2" style="width: 21rem; border: none;" id="<?php echo $row['id']; ?>">
                    <div class="card-body shadow">
                        <button type="button" class="btn-close btn-close-red" aria-label="Close" data-bs-toggle="modal" data-bs-target="#modalEliminarProveedor" data-bs-id="<?= $row['id'] ?>"></button>
                        <h3 class="card-title"><?php echo $row['nombre'] ?></h3>
                        <hr>
                        <h5 class="mb-1">
                            <?php echo $row['direccion'] ?>
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <hr>
                                <h6>Teléfono</h6>
                                <span class="badge text-bg-primary align-bottom"><?php echo $row['telefono'] ?></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <hr>
                                <h6>Correo</h6>
                                <span class="badge text-bg-primary align-bottom"><?php echo $row['correo'] ?></span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#modalEditProveedor" data-bs-id="<?= $row['id'] ?>">
                        <i class="fa-duotone fa-circle-plus"></i>
                        Editar
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'modalEditProveedor.php'; ?>
    <?php include 'modalEliminarProveedor.php'; ?>
    <?php include 'modalNewProv.php'; ?>
    <script>
        let editaModal = document.getElementById('modalEditProveedor');
        let eliminaModal = document.getElementById('modalEliminarProveedor');

        editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            console.log('ID obtenido:', id);

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #nombre')
            let inputDireccion = editaModal.querySelector('.modal-body #direccion')
            let inputTelefono = editaModal.querySelector('.modal-body #telefono')
            let inputEmail = editaModal.querySelector('.modal-body #correo')

            let url = "getProv.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = id,
                    inputNombre.value = data.nombre,
                        inputDireccion.value = data.direccion,
                        inputTelefono.value = data.telefono,
                        inputEmail.value = data.correo

                }).catch(err => console.log(err))
        })

        eliminaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaModal.querySelector('.modal-footer #id').value = id
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<style>
    .btn-close-red {
        color: #fff;
        /* Color del texto (icono) del botón */
        background-color: #dc3545;
        /* Color de fondo del botón */
        border-color: #dc3545;
        /* Color del borde del botón */
    }

    .btn-close-red:hover {
        color: #fff;
        /* Color del texto (icono) del botón al pasar el mouse */
        background-color: #c82333;
        /* Color de fondo del botón al pasar el mouse */
        border-color: #bd2130;
        /* Color del borde del botón al pasar el mouse */
    }
</style>