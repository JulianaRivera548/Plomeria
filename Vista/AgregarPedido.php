<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body style="min-height: 100vw;">
    
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand " href="index.html">
                <img src="imagenes/logo.png" alt="" width="50"  class="d-inline-block align-text-center ">&nbsp;Plomeros
            </a>
        </div>
    </nav>
    <br>
    <div class="card">
        <div class="card-body" style="display: inline-flex;">
          <div class="d-flex flex-column" style="width: 70vw;">
            <textarea cols="130" rows="5" placeholder="Detalle del daño"></textarea>
            <br>
            <div class="dropdown" style="text-align: center;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Tipo de arreglo
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Tuberías</a></li>
                  <li><a class="dropdown-item" href="#">Electrodomésticos</a></li>
                  <li><a class="dropdown-item" href="#">Fugas</a></li>
                  <li><a class="dropdown-item" href="#">Averías</a></li>
                </ul>
              </div>
          </div>
          <div style="align-self: center; width: 20vw;">
            <center><button type="button" class="btn btn-dark" style="text-align: center;">enviar</button></center>
          </div>
        </div>
    </div>
  </body>
</html>