<?php
include_once '../../Modelo/Administrador.php';
$Administrador = new Administrador($_SESSION["id"]);
$Administrador->consultar();
?>

<div class="container-fluid" class="navbar " style="background-color: #e3eeff;">
	
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
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
						
						
							
						</ul>

						<ul class="navbar-nav ms-auto">	
							<li class="nav-item"><a class="nav-link"
								href="index.php?sesion=false">Cerrar Sesion</a></li>
						</ul>

					</div>
			
			</nav>
				</div>
				
				
				

