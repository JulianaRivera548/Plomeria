<!DOCTYPE html>
<html lang="es">
<head >
       <meta charset="UTF-8">
       <link  href="style.css" rel="stylesheet">
       <title>Inicio</title>
         <link rel="stylesheet"  href="pagina_principal.html">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="img/logo2.png" style="width: 30px; height: 30px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="pagina_principal.html">Inicio</a>
        <a id="boton" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">registrarse</a>
       </div>
    </div>
  </div>
</nav>
<br>
<form class="forms">
  <div class="row mb-3" >
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input id="cheks" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Cliente
        </label>
      </div>
      <div class="form-check">
        <input id="cheks" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Plomero
        </label>
      </div>
      <div class="form-check disabled">
        <input id="cheks" class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label  class="form-check-label" for="gridRadios3">
          Administrador
        </label>
      </div>
    </div>
  </fieldset>
  
  <button id="boton" type="submit" class="btn btn-primary">Ingresar</button>
</form>

<br>
<hr>
<br>
<form class="row g-3" class="collapse" id="collapseExample" style="margin: 10%;">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre</label>
    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Escribe tu nombre" required>
    <div class="valid-feedback">
      Bien!
    </div>
  </div>
  <div class="row mb-3">
    <label for="validationServer02" class="form-label" >Apellido</label>
    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Escribe tu apellido" required>
    <div class="valid-feedback">
      Bien!
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="validationServerUsername" class="form-label">Nombre de usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" placeholder="Escribe tu usuario"required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Por favor rellena el campo.
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="validationServer03" class="form-label">Ciudad</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required placeholder="Escribe tu ciudad">
    <div id="validationServer03Feedback" class="invalid-feedback">
      Por favor rellena el campo.
    </div>
  </div>
  <br>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">Cargo</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Tipo de ingreso</option>
       <option>Cliente</option>
       <option>Administrador</option>
       <option>Plomero</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Por favor rellena el campo.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Telefono</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required placeholder="Escribe tu telefono">
    <div id="validationServer05Feedback" class="invalid-feedback">
      Por favor rellena el campo.
    </div>
  </div>

  <div class="row mb-3">
    <div class="form-check">
       <br>
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Aceptar Terminos y condiciones
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        Por favor acepte los terminos.
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <button id="boton" class="btn btn-primary" type="submit">Siguiente</button>
  </div>
</form>
</body>