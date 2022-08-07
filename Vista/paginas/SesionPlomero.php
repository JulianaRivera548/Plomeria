<?php 
$plomero = new Plomero($_SESSION["id"]);
$plomero -> consultar();
	

    
?>

	<div class="container-fluid" class="navbar " style="background-color: #e3f2fd;">
	
			<nav class="navbar navbar-expand-lg navbar-light container ">
				
					<a class="navbar-brand"
						href=""><i
						class="fas fa-home"></i></a>
					<button class="navbar-toggler" type="button"
						data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon" ></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle"
								href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="index.php?pagina=ConsultarServicioPlomero" action="index.php?pagina=ConsultarServicio.php" >Colsultar servicios</a></li>
										<li><a class="dropdown-item" href="#">Consultar Clientes</a></li>
								</ul></li>
						</ul>

						<ul class="navbar-nav ms-auto">	
							<li class="nav-item"><a class="nav-link"
								href="index.php?sesion=false">Cerrar Sesion</a></li>
						</ul>

					</div>
			
			</nav>
				</div>


<div class="container">
	<div class="row mt-3">
		
		<div class="col text-center">
		
		<div class="card card text-dark bg-light">
			<h5 class="card-header"><?php echo $plomero -> getNombre() . " " . $plomero -> getApellido() ?></h5>
			<div class="card-body">
			<?php echo $plomero -> getCorreo() ?>
			</div>
		</div>
		<?php	
            #}
        ?>
		</div>
</div>
</div>
