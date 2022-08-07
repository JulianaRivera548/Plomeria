   <?php ob_start(); ?> 

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
        table{
          text-align: center;
        }
    </style>
    
    
    <?php
      $servicio = ctrPDF::datosServicio();
      $cliente = $servicio->getIdCliente();
    
    ?>

    <div class="container">
        <p class="padding">Plomeros<br>Servicio de plomeria de alta calidad<br>cra 12 #34-56<br>Bogotá, Colombia<br></p>
        <div class="img">
            <img src="./Imagenes/logo2.png" width="130px">
        </div>
    </div>
    <div class="container-fluid">
        <p>
            <h4>Datos del cliente</h4>
            <?php echo $cliente->getNombre()." ".$cliente->getApellido(); ?> 
            <br><?php echo $cliente->getCorreo(); ?> 
            <br><?php echo $cliente->getTelefono(); ?> 
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
                    <td><?php echo ctrCliente::getTipoServicio($servicio->getIdTipoServicio()); ?></td>
                    <td><?php echo $servicio->getFecha(); ?></td>
                    <td><?php echo $servicio->getDetalleServicio()->getDescripcion(); ?></td>
                    <td><?php echo $servicio->getDetalleServicio()->getRepuestos();  ?></td>
                    <td><?php echo $servicio->getDetalleServicio()->getInsumos();  ?></td>
                    <td><?php echo $servicio->getDetalleServicio()->getGarantia();  ?></td>
                    <td><?php echo "$".$servicio->getFactura()->getValor_total(); ?></td>
                    <td><?php echo "$".$servicio->getFactura()->getValor_visita(); ?></td>
                    <td><?php echo "$".$servicio->getValorServicio(); ?></td>
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
                    <td><?php echo "$".$servicio->getValorServicio(); ?></td>
                  </tr>
                </tbody>
              </table>
            </p>
        </div>
    </div>
</body>
</html>

<?php
  $html=ob_get_clean();
  echo $html;
  
  require_once 'librerias/dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnabled'=>true));
  $dompdf->setOptions($options);

  $dompdf->loadHtml("alguna mierda");
  $dompdf->setPaper('letter');
  $dompdf->render();
  $dompdf->stream("algo.pdf", array("Attachment"=>false));
?>