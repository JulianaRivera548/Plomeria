<?php
$Plomeros = new Plomero();
$Plomero = $Plomeros -> consultarTodos();


?>
<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Consultar Plomero</h5>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
							<th>#</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Correo</th>
								<th>Telefono</th>
								<th>Certificado</th>
							</tr>
						
						</thead>
						<tbody>
							<?php 
							$i = 1;
				
							foreach ($Plomero as $plomeroactual){
							    echo "<tr>";
							    echo "<td>" . $i++ . "</td>";
							    echo "<td>" . $plomeroactual->getNombre(). "</td>";
							    echo "<td>" . $plomeroactual -> getApellido() . "</td>";
							    echo "<td>" . $plomeroactual -> getCorreo() . "</td>";
							    echo "<td>" . $plomeroactual -> getTelefono(). "</td>";
								echo "<td>" . $plomeroactual -> getCertificado()->getEspecialidad(). "</td>";
							    echo "</tr>";							    
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
