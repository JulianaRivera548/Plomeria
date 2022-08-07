<?php 

	
	$tipoServicio = ctrPlomero::mostrar('plomero','servicio','cliente','detalle_servicio','factura',1);

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
								<th>Fecha Visita</th>
								<th>Detalles</th>
								<th>Informacion arreglo</th>
								<th>Fecha Arreglo</th>
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
								<td><?php echo $value['Fecha1'] ?></td>
								<td>
									<form action="index.php?pagina=Valor&idServicio=<?php echo $value['idServicio']; ?>" method="POST" name="form">
										<?php $idServicio = $value['idServicio']; ?>
										<button name="<?php echo $value['idServicio']?>" type="submit" class="btn btn-dark"  <?php $tipoServicio2 = ctrPlomero::mostraractivacion($value['idServicio']); if($tipoServicio2[0]['Fecha'] ==='00-00-0000'){ echo 'disabled'; }?> >Agregar
										</button>
										
									</form>
								</td>
								<td><?php echo $value['Descripcion']; ?></td>
								<td>
								<?php echo $value['Fecha2']; ?>
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

