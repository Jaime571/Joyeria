<div class="modal fade" id="modalEditClient" tabindex="-1" aria-labelledby="modalEditClientLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditClientLabel">Editar Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="updateCliente.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-bg-info rounded p-2 mb-2 text-light">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="a_paterno" class="form-label text-bg-info rounded p-2 mb-2 text-light">Apellido Paterno:</label>
                        <input type="text" name="a_paterno" id="a_paterno" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="a_materno" class="form-label text-bg-info rounded p-2 mb-2 text-light">Apellido Materno:</label>
                        <input type="text" name="a_materno" id="a_materno" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="form-label text-bg-info rounded p-2 mb-2 text-light">Telefono:</label>
                            <input type="number" name="telefono" id="telefono" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="correo" class="form-label text-bg-info rounded p-2 mb-2 text-light">Correo:</label>
                            <input type="text" name="correo" id="correo" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>