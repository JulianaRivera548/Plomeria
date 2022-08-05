<?php
include_once "../Modelo/Administrador.php";
include_once '../Modelo/Cliente.php';
session_start();
$correo = $_POST["Correo"];
$clave = $_POST["Clave"];
$Administrador = new Administrador("", "", "", $correo, $clave);
if ($Administrador->autenticar()) {
   
    $_SESSION["id"] = $Administrador->getId();
  
echo '<script>
    window.location.href = "../index.php?pagina=SesionAdministrador";
    </script>';



}else{
    $Cliente = new cliente("", "", "", $correo, $clave);
    if($Cliente -> autenticar()){

            $_SESSION["id"] = $Cliente -> getId();
            
			echo '<script>
   			 window.location.href = "../index.php?pagina=SesionCliente";
    		</script>';

    }else {
        echo '<script>
                 alert("Usuario no existe");
                 window.location.href = "../index.php?pagina=Ingreso";
              </script>';
 
}
}

