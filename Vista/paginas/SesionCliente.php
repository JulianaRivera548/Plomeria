  <?php if(isset($_SESSION["id"])){ ?>
    <?php
    $cliente = ctrCliente::mostrar('cliente');
    $servicio = ctrCliente::mostrarDescripcionServicio($_SESSION["id"]); 
    
    ?>
    

      <div class="container-fluid">
        <p style="text-align: left; display: inline;">
            Bienvenido 
            <?php
                if(!isset($_SESSION)){ 
                  session_start(); 
                } 
                foreach($cliente as $row){
                  if($row['idCliente'] == $_SESSION["id"]){
                    $_SESSION['idCliente'] = $row['idCliente'];
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
    
    <br>
    <?php foreach($servicio as $row){ ?>
    <div class="card">

      <?php if($row['Valor_Total'] == 0 || $row['Insumos'] == ""){ ?>
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
            <textarea readonly cols="130" rows="5" placeholder="<?php echo $row['Descripcion']; ?>"></textarea>
            <input type="text" value="valor a pagar: $<?php echo $row['Valor_Visita']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
          </div>
          <div style="align-self: center; width: 20vw;">
            <center><button type="button" class="btn btn-dark" style="text-align: center;" disabled>Pagar</button></center>
          </div>
        </div>
        <?php if($row['Fecha_Visita'] == "00-00-0000"){ ?>
          <div class="card">
            <div class="card-body">
              Prontamente se le agendará una cita para la visita del plomero.
            </div>
          </div>
        <?php }else{ ?>
          <div class="card">
            <div class="card-body">
              La visita del plomero está asignada para el día <?php echo $row['Fecha_Visita']; ?>
            </div>
          </div>
        <?php } ?>

      <?php }else{ ?>
          
          
            
            <?php if($row['Estado_idEstado'] == 2){ ?>
              <?php if($row['Valor_Servicio'] > 10000){ ?>
              <div class="card-body" style="display: inline-flex;">
                <div class="d-flex flex-column" style="width: 70vw;">
                  <textarea readonly cols="130" rows="10" placeholder="El plomero detalló lo siguiente: <?php echo ctrCliente::mostrarDetalles($row['idServicio']); ?>" ></textarea>
                  <input type="text" value="valor a pagar: $0" style="text-align: center; color: white;" class="bg-dark" disabled>
                </div>
              </div>
                <?php if($row['Fecha_Accion'] == "00-00-0000"){ ?>
                  <div class="card">
                    <div class="card-body">
                      Prontamente se le agendará una cita para arreglar su problema.
                    </div>
                  </div>
                <?php }else{ ?>
                  <div class="card">
                    <div class="card-body">
                      Su cita se agendó para el día <?php echo $row['Fecha_Accion'] ?>
                    </div>
                  </div>
                <?php } ?>
              <?php 
                }else{
              ?>
              <div class="card-body" style="display: inline-flex;">
                <div class="d-flex flex-column" style="width: 70vw;">
                  <textarea readonly cols="130" rows="10" placeholder="El plomero detalló lo siguiente: <?php echo ctrCliente::mostrarDetalles($row['idServicio']); ?>" ></textarea>
                  <input type="text" value="valor a pagar: $0" style="text-align: center; color: white;" class="bg-dark" disabled>
                </div>
                <div style="align-self: center; width: 20vw;">
                  <center><button type="button" class="btn btn-dark" style="text-align: center;" onclick="window.open('index.php?pagina=FacturaPDF&id=<?php echo $row['idServicio'] ?>');">Generar factura en PDF</button></center>
                </div>
              </div>
                <div class="card">
                  <div class="card-body">
                    Se ha completado el proceso.
                  </div>
                </div>
                
              <?php 
                } 
                
              ?>
            <?php }else{ $_SESSION['idServicio'] = $row['idServicio']; ?>
              <?php $_SESSION['ValTotal'] = $row['Valor_Total']; ?>
              <?php $_SESSION['ValVisita'] = $row['Valor_Visita']; ?>
              <div class="card-body" style="display: inline-flex;">
                <div class="d-flex flex-column" style="width: 70vw;">
                  <textarea readonly cols="130" rows="10" placeholder="El plomero detalló lo siguiente: <?php echo ctrCliente::mostrarDetalles($row['idServicio']); ?>" ></textarea>
                  <input type="text" value="valor a pagar: $<?php echo $row['Valor_Total']; ?>" style="text-align: center; color: white;" class="bg-dark" disabled>
                </div>
                <div style="align-self: center; width: 20vw;">
                  <form action="index.php?pagina=Confirmacion" method="POST" style="text-align: center;">
                      <input type="submit" name="aceptar" class="btn btn-dark" value="Aceptar" />
                      <input type="submit" name="rechazar" class="btn btn-light" value="Rechazar" />
                  </form>
                </div>

              <!-- <script>window.location.href = "index.php?pagina=Pago"; </script> -->
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
  <?php 
    }else{
      echo '<div class="card">
              <div class="card-body">
                <h4>Por favor logueese para hacer un pedido</h4>
              </div>
            </div>';
    }
  ?>