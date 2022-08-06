<?php 

	//$tipoServicio = ctrPlomero::mostrar('plomero','servicio','cliente','detalle_servicio','id_plomero','Detalle_Servicio_idDetalle_Servicio',1);
	$tipoServicio = ctrPlomero::mostrar('plomero','servicio','cliente','detalle_servicio',1);

    if(!isset($_SESSION)){
		session_start();
	}

    if(!(isset($_SESSION['error']))){
      $_SESSION['error'] = "";
    }
    
?>

<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card" >
				<h5 class="card-header">Consultar Servcios</h5>
				<div class="card-body">


					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Valor visita</th>
								<th>Nombre Cliente</th>
								 <th >Detalles</th>
								 <th >Informacion arreglo</th>
								 <th >Autorizacion</th>
								 

							</tr>
						</thead>
						<tbody>
						<?php	
              				foreach($tipoServicio as $key => $value){
              			?>
              				<tr>
							  	
              					<th scope="row"><?php echo $key+1 ?></th>
              					<td><?php echo $value['Valor_Servicio']; ?></td>
								<td><?php echo $value['Nombre']; ?></td>
								
								<td>
									<form action="index.php?pagina=Valor&idServicio=<?php echo $idServicio ?>" method="POST" name="form">
										<?php $idServicio = $value['idServicio']; ?>
										<button name="<?php echo $value['idServicio']?>" type="submit" class="btn btn-dark">Agregar
										</button>
									</form>
								</td>
								
								<td><?php echo $value['Descripcion']; ?></td>
								<td>
									<i class="fa fa-check" aria-hidden="true">si</i>
									<i class="fa fa-times" aria-hidden="true">no</i>
								</td>
              				</tr>
              				<?php }?>
							
							  
            			</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>




</div>

