    <?php

    $cliente = ctrCliente::mostrarClientes(); 
	
    
    ?>
    
      <div class="container-fluid">
        <p style="text-align: left; display: inline;">
            Bienvenido 
            <?php
                echo $cliente[0]['Nombre'] . " " . $cliente[0]['Apellido'];
            ?> 
        </p>
        <p style="float: right;">
            <?php
                $fecha = new Fecha();
                echo $fecha->getFecha() . " - " . $fecha->getHora();
            ?>
        </p>
      </div>
    
    <br>
    <div class="card">
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
            <textarea readonly cols="130" rows="5" placeholder="Detalle del daño"></textarea>
            <input type="text" value="valor a pagar: 0$" style="text-align: center; color: white;" class="bg-dark" disabled>
          </div>
          <div style="align-self: center; width: 20vw;">
            <center><button type="button" class="btn btn-dark" style="text-align: center;" disabled>Pagar</button></center>
          </div>
        </div>
    </div>
    <div class="card bg-dark" style="color: white;">
      <div class="container-fluid" style="text-align: center; vertical-align: middle; margin: 10px;">
        <a href="index.php?pagina=AgregarPedido" class="navbar-brand">
          <img src="Imagenes/mas.png" width="32px" class="d-inline-block align-text-center" style="filter: invert(100%); align-self: center;">&nbsp; Agendar nueva cita
        </a>
      </div>
    </div>