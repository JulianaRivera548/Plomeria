    <?php $tipoServicio = ctrCliente::mostrarTipos_servicio(); ?>

    
    <br>
    <div class="card">
      <div class="card-body" id="error"></div>
    </div>
    <div class="card">
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
            <textarea cols="130" rows="5" placeholder="Detalle del daño" id="textArea"></textarea>
            <br>
            <select class="form-select" aria-label="Default select example" id="tipos">
              <option selected>Tipo de arreglo</option>
              <option value="tuberias">Tuberías</option>
              <option value="electrodomesticos">Electrodomésticos</option>
              <option value="fugas">Fugas</option>
              <option value="otros">Otras averías</option>
            </select>

            <!-- <div class="dropdown" style="text-align: center;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Tipo de arreglo
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Tuberías</a></li>
                  <li><a class="dropdown-item" href="#">Electrodomésticos</a></li>
                  <li><a class="dropdown-item" href="#">Fugas</a></li>
                  <li><a class="dropdown-item" href="#">Otras averías</a></li>
                </ul>
              </div>-->
          </div> 
          <div style="align-self: center; width: 20vw;">
            <center><button type="button" class="btn btn-dark" style="text-align: center;" onclick="enviar();">enviar</button></center>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            Tenga en cuenta que los precios base para su tipo de reparacion son los que están en la tabla de abajo
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
              <th scope="row"><?php $key ?></th>
              <td><?php echo $value['Tipo_Servicio']; ?></td>
              <td><?php echo $value['Valor']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        
    </div>

    <script>
      function enviar(){
        if(document.getElementById("textArea").value == "" || document.getElementById("tipos").selectedIndex == 0){
          document.getElementById("error").innerText = "Por favor, llene los campos";
        }else{
          window.location.href = "index.php?pagina=SesionCliente";
        }
      }
    </script>