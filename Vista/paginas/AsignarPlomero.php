<?php 
    $plomeros = crtAdministrador::mostrar('plomero');
?>
<form action="index.php?pagina=ValidarAsignarPlomero&idServicio=<?php echo $_GET['idServicio']; ?>" method='POST'>
    <select class="form-select" aria-label="Default select example" id="tipos" name="selectPlomero">
        <?php foreach($plomeros as $row){ if($row['idPlomero'] > 1){ ?>
        <option value="<?php echo $row['idPlomero']; ?>"><?php echo $row['Nombre']." ".$row['Apellido']; ?></option>
        <?php }} ?>
    </select>
    <button type="submit">Asignar</button>
</form>


