 <!-- TODO:Terminar Editar producto -->
<div class="modal fade" id="modalEditProd" tabindex="-1" aria-labelledby="modalEditProdLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditProdLabel">Editar producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="updateProd.php" method="POST" enctype="multipart/form-data">
                    <!-- Para editar -->
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-bg-info rounded p-2 mb-2 text-light">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label text-bg-info rounded p-2 mb-2 text-light">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" require></textarea>
                    </div>
                    <div class="mb-3 w-25">
                        <label for="precio" class="form-label text-bg-info rounded p-2 mb-2 text-light">Precio:</label>
                        <input type="text" name="precio" id="precio" class="form-control" require>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>