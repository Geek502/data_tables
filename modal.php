
<div class="modal fade" id="openModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega nuevos juegos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmnuevo">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre"  class="form-control input-sm" placeholder="Nombre">
            
            <label for="">Año</label>
            <input type="text" name="anio" id="anio"  class="form-control input-sm" placeholder="año ">

            <label for="">Emrpresa</label>
            <input type="text" name="empresa" id="empresa"  class="form-control input-sm" placeholder="Empresa">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnAgregarNuevo">Guardar</button>
      </div>
    </div>
  </div>
</div>