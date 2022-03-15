$(document).ready(function(){
	$('#DataTable').load('tabla.php')
 });


$(document).ready(function(){
		$('#btnAgregarNuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==0){
						$('#frmnuevo')[0].reset();
						$('#DataTable').load('tabla.php');
						alertify.success("agregado con exito");
					}else{
						$('#frmnuevo')[0].reset();
						$('#DataTable').load('tabla.php');
						alertify.error("Error al agregar los datos");
					}
				}
			});
		});
});


function agregarFrmActualizar(id_juego){
		
	$.ajax({
		type:'POST',
		data:'id_juego' + id_juego,
		url: "procesos/obtenDatos.php",
		success:function(r){
			datos=jQuery.parseJSON(r);
			$('#id_juego'.val(datos['id_juego']));
			$('#nombreU'.val(datos['nombre']));
			$('#anioU'.val(datos['anio']));
			$('#empresaU'.val(datos['empresa']));

		}

	});

}


 

