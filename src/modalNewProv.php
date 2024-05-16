<div class="modal fade" id="modalNewProv" tabindex="-1" aria-labelledby="modalNewProvLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalNewProvLabel">Registrar Proveedor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="saveProv.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-bg-info rounded p-2 mb-2 text-light">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label text-bg-info rounded p-2 mb-2 text-light">Dirección:</label>
                        <textarea name="direccion" id="direccion" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="form-label text-bg-info rounded p-2 mb-2 text-light">Teléfono:</label>
                            <input type="number" name="telefono" id="telefono" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="correo" class="form-label text-bg-info rounded p-2 mb-2 text-light">Correo:</label>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar Proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>