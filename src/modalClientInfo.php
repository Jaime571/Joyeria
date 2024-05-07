<!-- <div class="modal" tabindex="-1" id="Detalles<?php echo $row['id']; ?>" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal" tabindex="-1" id="Detalles<?php echo $row['id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Detalles del Cliente</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí puedes mostrar la información específica del cliente -->
                <h3><strong>Nombre:</strong> <?php echo $row['nombre'] . ' ' . $row['a_paterno'] . ' ' . $row['a_materno']; ?></h3>
                <h3><strong>Fecha de afiliación:</strong> <?php echo $row['fecha_afiliacion']; ?></h3>
                <h3><strong>Teléfono:</strong> <?php echo $row['telefono']; ?></h3>
                <h3><strong>Correo:</strong> <?php echo $row['correo']; ?></h3>
                <!-- Agrega más información del cliente si es necesario -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <!-- Puedes agregar un botón adicional aquí si necesitas funcionalidad de guardado -->
            </div>
        </div>
    </div>
</div>