    <style>
        p{
            font-family: Arial, Helvetica, sans-serif; 
            font-size: large;
            display: inline-flex;
        }
        .img{
            float: right;
            padding: 20px 30px;
        }
        .container{
            padding-bottom: 30px;
        }
        .padding{
            padding-top: 20px;
        }
    </style>
    
    
    <?php
      $servicio = ctrPDF::datosServicio();
      $cliente = $servicio->getIdCliente();
    
    ?>

    <div class="container">
        <p class="padding">Plomeros<br>Servicio de plomeria de alta calidad<br>cra 12 #34-56<br>Bogotá, Colombia<br></p>
        <div class="img">
            <img src="./Imagenes/logo2.png" width="100px">
        </div>
    </div>
    <div class="container-fluid">
        <p>
            <h4>Datos del cliente</h4>
            <?php echo $cliente->getNombre()." ".$cliente->getApellido(); ?> 
            <br><?php echo $cliente->getCorreo(); ?> 
            <br><?php echo $cliente->getCorreo(); ?> 
        </p>
        <br>
        <div class="container-fluid padding">
            <p>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tipo Servicio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Repuestos</th>
                    <th scope="col">Insumos</th>
                    <th scope="col">Garantía</th>
                    <th scope="col">Valor Servicio</th>
                    <th scope="col">Valor Visita</th>
                    <th scope="col">Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php $servicio ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                  </tr>
                  <tr>
                    <td>TOTAL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>precio total</td>
                  </tr>
                </tbody>
              </table>
            </p>
        </div>
    </div>