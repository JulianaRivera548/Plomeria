    <?php

    $cliente = ctrCliente::mostrar('cliente'); 
    $servicio = ctrCliente::mostrarDescripcionServicio($cliente[0]['idCliente']); 
    
    ?>  <!-- esto despues se quita por lo que está en el whatsapp para validar -->
    
      <div class="container-fluid">
        <p style="text-align: left; display: inline;">
            Bienvenido 
            <?php
                if(!isset($_SESSION)){ 
                  session_start(); 
                } 
                $_SESSION['idCliente'] = $cliente[0]['idCliente'];
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
    <?php foreach($servicio as $row){ ?>
    <div class="card">

      <?php if($row['Insumos'] == ""){ ?>
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
            <textarea readonly cols="130" rows="5" placeholder="<?php echo $row['Descripcion']; ?>"></textarea>
            <input type="text" value="valor a pagar: $<?php echo $row['Valor_Visita']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
          </div>
          <div style="align-self: center; width: 20vw;">
            <center><button type="button" class="btn btn-dark" style="text-align: center;" disabled>Pagar</button></center>
          </div>
        </div>
      <div class="card">
        <div class="card-body">
          Prontamente se le agendará una cita para la visita del plomero.
        </div>
      </div>

      <?php }else{ ?>
          <?php if(!isset($_SESSION['aceptaServicio'])){ ?> <!-- poner esto que si el valor total de la base de datos es mayor a 0 -->
          <div class="card-body" style="display: inline-flex;">
            <div class="d-flex flex-column" style="width: 70vw;">
              <textarea readonly cols="130" rows="5" placeholder="El plomero detalló lo siguiente: <?php echo $row['Descripcion']; ?>"></textarea>
              <input type="text" value="valor a pagar: $<?php echo $row['Valor_Total']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
            </div>
            <div style="align-self: center; width: 20vw;">
              <form action="index.php?pagina=Confirmacion" method="POST" style="text-align: center;">
                  <input type="submit" name="aceptar" class="btn btn-dark" value="Aceptar" />
                  <input type="submit" name="rechazar" class="btn btn-light" value="Rechazar" />
              </form>
            </div>


          <?php }else{ ?>
            
            <?php if($row['Estado_idEstado'] == 2){ ?>
              <?php if($_SESSION['aceptaServicio']){ ?>
                <div class="d-flex flex-column" style="width: 70vw;">
                  <textarea readonly cols="130" rows="5" placeholder="El plomero detalló lo siguiente: <?php echo $row['Descripcion']; ?>"></textarea>
                  <input type="text" value="valor a pagar: $<?php echo $row['Valor_Total']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
                  <?php $_SESSION['ValorPagar'] = $row['Valor_Total']; ?>
                </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    Prontamente se le agendará una cita para arreglar su problema.
                  </div>
                </div>

              <?php 
                }else{
              ?>
                <div class="d-flex flex-column" style="width: 70vw;">
                    <textarea readonly cols="130" rows="5" placeholder="El plomero detalló lo siguiente: <?php echo $row['Descripcion']; ?>"></textarea>
                    <input type="text" value="valor a pagar: $<?php echo $row['Valor_Visita']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
                    <?php $_SESSION['ValorPagar'] = $row['Valor_Visita']; ?>
                  </div>
                  <div style="align-self: center; width: 20vw;">
                    <center><button type="button" class="btn btn-dark" style="text-align: center;" >Pagar</button></center>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    Se ha completado el proceso.
                  </div>
                </div>
                <?php $_SESSION['aceptaServicio'] = null;  ?>
              <?php 
                } 
                
              ?>
            <?php }else{ $_SESSION['idServicio'] = $row['idServicio']; ?>

              <script>window.location.href = "index.php?pagina=Pago"; </script>
            <?php } ?>
          <?php } ?>
      <?php } ?>

    </div>
    <br>
    <?php } ?>
    <div class="card bg-dark" style="color: white;">
      <div class="container-fluid" style="text-align: center; vertical-align: middle; margin: 10px;">
        <a href="index.php?pagina=AgregarPedido" class="navbar-brand">
          <img src="Imagenes/mas.png" width="32px" class="d-inline-block align-text-center" style="filter: invert(100%); align-self: center;">&nbsp; Agendar nueva cita
        </a>
      </div>
    </div>