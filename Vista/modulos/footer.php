

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
       <img src="Imagenes/logo2.png" style="width: 30px; height: 30px;">
    <a class="navbar-brand" href="#">Plomeros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pid=<?php echo base64_encode("Vista/Ingreso.php")?>">ingresar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="slider">
       <div>
   
              <img src="Imagenes/logo.png" style="width: 60px; height: 60px; float: left;">
              <h1 style=" color: black; float: left;">Plomeros.com</h1>

       </div>
       
</div>

<div class="texto" style="width: 90%px; border: 1px solid black; margin: 5%; color: black;">
       <h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </h4>
</div>

<table class="collapse" id="collapseExample" style="width: 80%px; height: 400px;  margin: 10%; color: black;">
              <thead>
                     <tr>
                            <th >
                                  PRODUCTO 
                            </th>
                            <th >
                                   DESCRIPCION
                            </th>
                     </tr>
              </thead>
              <tr>
                     <th>
                            <img src="img/pro1.png" style="width: 100px; height: 100px;">
                     </th>
                     <th>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     </th>
              </tr>
              <tr>
                     <th>
                            <img src="img/pro2.png" style="width: 100px; height: 100px;">
                     </th>
                     <th>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     </th>
              </tr>
              <tr>
                     <th>
                            <img src="img/pro3.png" style="width: 100px; height: 100px;">
                     </th>
                     <th>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     </th>
              </tr>
</table>
</body>