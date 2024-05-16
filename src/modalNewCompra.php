<div class="modal fade" id="modalNewCompra" tabindex="-1" aria-labelledby="modalNewCompraLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalNewCompraLabel">Registrar Comrpa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="saveCompra.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="id_proveedor" class="form-label text-bg-info rounded p-2 mb-2 text-light">Proveedor:</label>
                        <select name="id_proveedor" id="id_proveedor" class="form-select">
                            <option value="">Seleccionar Proveedor</option>
                            <?php foreach ($rowsProv as $row) { ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nombre']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_producto" class="form-label text-bg-info rounded p-2 mb-2 text-light">Producto:</label>
                        <select name="id_producto" id="id_producto" class="form-select">
                            <option value="">Seleccionar Producto</option>
                            <?php foreach ($rowsProd as $row) { ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cantidad" class="form-label text-bg-info rounded p-2 mb-2 text-light">Cantidad:</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tipo_pago" class="form-label text-bg-info rounded p-2 mb-2 text-light">Tipo de pago:</label>
                            <select name="tipo_pago" id="tipo_pago" class="form-select">
                                <option value="EFVO"></option>
                                <option value="EFVO">Efectivo</option>
                                <option value="TARJETA">Tarjeta</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Compra</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>