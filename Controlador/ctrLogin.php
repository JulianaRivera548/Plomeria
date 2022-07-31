<?php
$correo = $_POST["Correo"];
$clave = $_POST["Clave"];
$Administrador = new Administrador("", "", "", $correo, $clave);
if ($Administrador->autenticar()) {
    $_SESSION["id"] = $Administrador->getId();
    header("Location: index.php?pid=" . ("Vista/SesionAdministrador.php"));
    exit;
} else {
  echo '<script> alert("Usuario no exixts");
        </script>';
  exit;
}
?>
