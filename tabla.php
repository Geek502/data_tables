
<?php 

require_once 'helpers.php'

?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Año</td>
				<td>Empresa</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Año</td>
				<td>Empresa</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			$juegos = obtenerJuegos($conexion);
			while ($mostrar=mysqli_fetch_row($juegos)) {
				?>
				<tr>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					
					<td class="btn btn-warning btn-sx "  data-toggle="modal" data-target="#openModal2" onClick="agregarFrmActualizar('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-pencil-square-o"></span>
					</td>
					
					<td class="btn btn-danger btn-sx">
						<span class="fa fa-trash"></span>
					</td>

				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>