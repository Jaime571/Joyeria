<style>
    /* Estilos para centrar el texto en el modal y la tabla */
    .modal-dialog {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh; /* Centrar verticalmente */
    }

    .modal-body {
        text-align: center; /* Centrar horizontalmente */
    }

    .table {
        width: 100%;
    }

    .table td,
    .table th {
        text-align: center; /* Centrar contenido de las celdas */
    }
</style>

<!-- Modal -->
<div class="modal fade" id="modalResumenVentas" tabindex="-1" aria-labelledby="modalResumenVentasLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalResumenVentasLabel">Ventas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach ($rowsVentasClientes as $row) { ?>
                    <div class="card m-2" style="width: 100%; border: none;">
                        <div class="card-body shadow rounded">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre Cliente</th>
                                        <th scope="col">Fecha Venta</th>
                                        <th scope="col">Tipo de pago</th>
                                        <th scope="col">Cantidad de productos</th>
                                        <th scope="col">Nombre de producto</th>
                                        <th scope="col">Precio unitario</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $row['nombre'] ?></td>
                                        <td><?= $row['fecha_venta'] ?></td>
                                        <td><?= $row['pago'] ?></td>
                                        <td><?= $row['cantidad'] ?></td>
                                        <td><?= $row['nombre_prod'] ?></td>
                                        <td><?= $row['unitario'] ?></td>
                                        <td><?= $row['precio_total'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
