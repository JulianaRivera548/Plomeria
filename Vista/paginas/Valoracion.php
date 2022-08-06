

<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Detalles Servicio</h5>
				<div class="card-body">


					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre Cliente</th>
								<th>Tipo Servicio</th>
								<th>Direccion</th>
								<th>Celular</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
									<?php 
									if(!isset($_SESSION))
										session_start();
										echo $_SESSION['usuid'];
									 ?></th>
								<td><?php
								
									$tipoServicio = ctrPlomero::mostrarTotalDatos($_SESSION['usuid'],'servicio','tipo_servicio','cliente');
									if(!(isset($_SESSION['error']))){
										$_SESSION['error'] = "";
									}
									foreach($tipoServicio as $key => $value){
									echo $value['Nombre'];
								?>
								</td>
								<td>
								<?php echo $value['Tipo_Servicio'];?>
								</td>
								<td>
								<?php echo $value['Direccion']; ?>
								</td></td>
								<td>
								<?php  echo $value['Telefono']; }?>
								</td>
								
							
							</tr>
							<tr>
						
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Valoracion</h5>
				<div class="card-body">
				<?php 
    				if(!(isset($_SESSION['error2']))){
      				$_SESSION['error2'] = "";
    				}
				?>
				<div class="card">
      			<div class="card-body" id="error"><?php echo $_SESSION['error2']; ?></div>
    			</div>
					<form action="index.php?pagina=Validar_envio" method="POST">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Informacion y severidad del arreglo</label>
							<textarea name="DetallePlo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							<label for="exampleFormControlTextarea1">Garantia</label>
							<textarea name="Garantia" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							<label for="exampleFormControlTextarea1">Insumos</label>
							<textarea name="Insumos" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							<label for="exampleFormControlTextarea1">Repuestos</label>
							<textarea name="Repuestos" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						
						<button type="submit" class="btn btn-dark">Aceptar</button>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>