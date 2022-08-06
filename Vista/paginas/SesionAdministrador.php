<?php
if(!isset($_SESSION["id"])){?>


	<?php
    $administrador = crtAdministrador::mostrar('administrador');
	echo   $administrador = crtAdministrador::mostrar('administrador');
    //$servicio = crtAdministrador::mostrarDescripcionServicio($_SESSION["id"]); 
    ?>


<div class="container-fluid">
        <p style="text-align: left; display: inline;">
            Bienvenido 
            <?php
                if(!isset($_SESSION)){ 
                  session_start(); 
                } 
                foreach($administrador as $row){
                  if($row['idAdministrador'] == $_SESSION["id"]){
                    $_SESSION['idAdministrador'] = $row['idAdministrador'];
                    echo $row['Nombre'] . " " . $row['Apellido'];
                  }
                }
            ?> 
        </p>
        <p style="float: right;">
            <?php
                $fecha = new Fecha();
                echo $fecha->getFecha() . " - " . $fecha->getHora();
            ?>
        </p>
      </div>

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
            
            <li><a class="dropdown-item" href="Vista/paginas/ConsultarPlomeros.php">Plomeros</a></li>
            <li><a class="dropdown-item" href="Vista/paginas/ConsultarServicio.php">Servicios</a></li>
          </ul>
        </li>
		</ul>

						

<ul class="navbar-nav ms-auto">

							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"

								href="#" id="navbarDropdown" role="button"

								data-bs-toggle="dropdown" aria-expanded="false">

                						</a>

								<div class="dropdown-menu">

									<a class="dropdown-item" href="#">Editar Perfil</a> <a

										class="dropdown-item" href="#">Cambiar Clave</a>

								</div></li>

							<li class="nav-item"><a class="nav-link"

								href="index.php?pagina=false">Cerrar Sesion</a></li>

						</ul>



					</div>
			
			</nav>
				</div>



				<?php 
    }else{
      echo '<div class="card">
              <div class="card-body">
                <h4>Por favor logueese </h4>
              </div>
            </div>';
    }
  ?>
				
				
				

