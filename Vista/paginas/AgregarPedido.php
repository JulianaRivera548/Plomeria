    <?php 
    $tipoServicio = ctrCliente::mostrar('tipo_servicio'); 
    if(!isset($_SESSION)){ 
      session_start(); 
    } 
    if(!isset($_SESSION['error'])){ 
      $_SESSION['error'] = ""; 
    } 
    //echo $_SESSION['idCliente'];
    ?>

    
    <br>
    <div class="card">
      <div class="card-body" id="error"><?php echo $_SESSION['error']; ?></div>
    </div>
    <div class="card">
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
          <form name="formularioDetalles" action="index.php?pagina=ValidarDetalles" method="POST">
            <textarea cols="130" rows="5" placeholder="Detalle del daño" id="textArea" name="textAreaDetalle"></textarea>
            <br>
            <select class="form-select" aria-label="Default select example" id="tipos" name="select">
              <option selected>Tipo de arreglo</option>
              <?php foreach($tipoServicio as $i => $row){ ?>
              <option value="<?php echo $i+1; ?>"><?php echo $row['Tipo_Servicio']; ?></option>
              <?php } ?>
            </select>
            <div style="align-self: center; width: 20vw; padding: 20px;">
              <center><button type="submit" class="btn btn-dark" style="text-align: center;">enviar</button></center>
            </div>
          </form>

          </div> 
          
        </div>
        
        

        <div class="card">
          <div class="card-body">
            Tenga en cuenta que:
            <ul>
             <li>Los precios base para su tipo de reparacion son los que están en la tabla de abajo</li>
             <li>Automáticamente se le asignará un valor de visita, pero se descuenta si decide aceptar lo que acuerda el plomero</li>
            </ul>
          </div>
        </div>

        <div class="container">
          <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">Tipo de servicio</th>
              <th scope="col">Precio</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($tipoServicio as $key => $value){
              ?>
              <tr>
              <th scope="row"><?php echo $key+1 ?></th>
              <td><?php echo $value['Tipo_Servicio']; ?></td>
              <td><?php echo $value['Valor']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        
    </div>
    