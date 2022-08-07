<?php 

	
	$tipoServicio = ctrServicio::mostrar('plomero','servicio','cliente','detalle_servicio','factura');
   

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
								<th>id servicio</th>
								<th>Fecha Visita</th>
								<th>Detalles</th>
								<th>Informacion arreglo</th>
								<th>Asignar plomero</th>
								<th>Valor repacion</th>
							</tr>
						</thead>

						<tbody>
						<?php	
              				foreach($tipoServicio as $key => $value){
              			?>
              				<tr>
							  	
              					<th scope="row"><?php echo $key+1 ?></th>
              					<td><?php echo $value['Valor_Servicio']; ?></td>
								<td><?php echo $value['idServicio']; ?></td>
								<?php if($value['Fecha1'] == "00-00-0000"){ ?>
								<td><form action="index.php?pagina=ValidarFecha&idServicio=<?php echo $value['idServicio']; ?>" method="POST" name="form">
										<input type="text" class="form-control" name="valor" required="required">
										<button type="submit" class="btn btn-dark" >Aceptar</button>	
									</form></td>
								<?php }else{ ?>
									<td>Fecha asignada</td>
									
  
									
								<?php } ?>
								<td><?php echo $value['Insumos'];?></td>
								<td><?php echo $value['Descripcion']; ?></td>
								<td><form action="index.php?pagina=AsignarPlomero&idServicio=<?php echo $value['idServicio']; ?>" method="POST" name="form">
                        
                                <button name="<?php echo $value['idServicio']?>" type="submit" class="btn btn-dark" >Asignar Plomero</button>
										
									</form></td>

                               
								<?php if($value['Valor_total'] == 0){ ?>
									<td>
                                    <form action="index.php?pagina=AsignarValor&idServicio=<?php echo $value['idFactura']; ?>" method="POST" name="form">
							<input type="text" class="form-control" name="valorServicio" required="required">
                                <button type="submit" class="btn btn-dark" >Aceptar</button>	
									</form></td>
									<?php }else{ ?>
									<td>Valor asignado</td>
									<?php } ?>
							</tr>

              				<?php }?>
							
							  
            			</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>




</div>

