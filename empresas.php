
	<?php 

		require_once 'head.php';

		require_once "php/conexion.php";
		$conexion=conexion();

		$sql = "SELECT * FROM vw_personas_lista";
		$result = $conexion -> query($sql);

	 ?>

	<script>
	 	$(document).ready(function(){
	 		$('#tablaProd').DataTable({
	 			"order": [[1, "asc"]],
	 			"language": {
	 				"lengthMenu": "Mostrar _MENU_ Postulantes por página",
	 				"info": "Mostrando página _PAGE_ de _PAGES_",
	 				"infoEmpty": "No hay registros disponibles",
	 				"infoFiltered": "(filtrada de _MAX_ registros)",
	 				"loadingRecords": "Cargando...",
	 				"processing": "Procesando...",
	 				"search": "Buscar",
	 				"zeroRecords": "No se encontraron registros coincidentes",
	 				"paginate": {
	 					"next": "Siguiente",
	 					"previous": "Anterior"
	 				},
	 			}
	 		});
	 	});
 	</script>


 	<section class="container">
		<div class="bg-white pl-5 pr-5 pb-3 container-tabla">
			<div class="row" id="">
				<div class="col-sm-12">
					<br>
					<h4 class="float-left">Lista de Postulantes</h4><br>
				</div>
			</div>
			<table class="table-hover table table-sm" id="tablaProd">
				<thead class="bg-light">
					<tr>
						<th>Carrera</th>
						<th>Nombres y Apellidos</th>
						<th>DNI</th>
						<th>Celular</th>
						<th>Correo</th>
						<th>Sexo</th>
					</tr>
				</thead>

				<tbody>

					<?php 
						while ($ver = $result -> fetch_assoc()) {
							$id = $ver['id'];
					?>
					<tr>
						<td><?php echo $ver['carrera']; ?></td>
						<td><?php echo $ver['apellidos'].", ".$ver['nombres']; ?></td>
						<td><?php echo $ver['dni']; ?></td>
						<td><?php echo $ver['celular']; ?></td>
						<td><?php echo $ver['correo']; ?></td>
						<td><?php echo $ver['sexo']; ?></td>
					</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
		<br><br>
	</section>


	 <?php 

		require_once 'footer.php';

	 ?>