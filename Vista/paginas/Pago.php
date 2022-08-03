<?php

  if(!isset($_SESSION)){
    session_start();
  }

  $metodosPago = ctrCliente::mostrar('metodo_pago');

?>

<div class="container">
  <br>
  <h2 style="text-align: center;">Formulario de pago</h2>
  <br>
    <form class="row g-3" action="index.php?pagina=ValidarPago" method="POST">
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationDefault02" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault03" class="form-label">Cédula</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Correo</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault03" class="form-label">Número de celular</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Método de pago</label>
        <select class="form-select" id="validationDefault04" name="selectEF" required>
          <option selected disabled value="">Seleccione la entidad financiera</option>
          <?php foreach($metodosPago as $metodo){ ?>
          <option value="<?php echo $metodo['Entidad_Financiera']; ?>"><?php echo $metodo['Entidad_Financiera']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-md-3">
        <label for="validationDefault03" class="form-label">Valor a pagar</label>
        <input type="text" class="form-control" id="validationDefault03" value="<?php if(isset($_SESSION['ValorPagar'])) echo $_SESSION['ValorPagar']; ?>" disabled>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
</div>