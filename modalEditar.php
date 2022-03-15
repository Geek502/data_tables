
<div class="modal fade" id="openModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar juego</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
                    <input type="text" name="id_juego" hidden="" id="id_juego">
                    <label for="">Nombre</label>
                    <input type="text" name="nombreU" id="nombreU"  class="form-control input-sm" placeholder="Nombre">
                    
                    <label for="">Año</label>
                    <input type="text" name="anioU" id="anioU"  class="form-control input-sm" placeholder="año ">

                    <label for="">Emrpresa</label>
                    <input type="text" name="empresaU" id="empresaU"  class="form-control input-sm" placeholder="Empresa">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>