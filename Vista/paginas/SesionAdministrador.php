<?php
$administrador = new Administrador($_SESSION["id"]);
$administrador -> consultar();

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
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Consultar
          </a>
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" href="./index.php?pagina=ConsultarPlomeros">Plomeros</a></li>
            <li><a class="dropdown-item" href="Vista/paginas/ConsultarServicio.php">Servicios</a></li>
          </ul>
        </li>
		</ul>

						

<ul class="navbar-nav ms-auto">

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
								href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador: <?php echo $administrador -> getNombre() . " " . $administrador -> getApellido() ?></a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Editar Perfil</a> <a
										class="dropdown-item" href="#">Cambiar Clave</a>
								</div></li>
								<li class="nav-item"><a class="nav-link"

href="index.php?pagina=Ingreso">Cerrar Sesion</a></li>

					

						</ul>


					




					</div>
			
			</nav>
				</div>



				
				

