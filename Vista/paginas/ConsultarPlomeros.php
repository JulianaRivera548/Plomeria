<?php
require_once 'Modelo/Plomero.php';
$plomero = new Plomero();
$plomero= $Plomero -> consultarTodos();
?>
<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Consultar Plomeros</h5>
				<div class="card-body">					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Correo</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $pos = 1;
                            foreach ($plomero as $plomeroactual) {
                                echo "<tr>";
                                echo "<td>" . $pos ++ . "</td>
                                      <td>" . $plomeroActual -> getNombre() . "</td>
                                      <td>" . $plomeroActual -> getApellido() . "</td>
                                      <td>" . $plomeroActual -> getCorreo() . "</td
                                 </td>";
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
