<?php
include_once "../Modelo/Administrador.php";
include_once '../Modelo/Cliente.php';
include_once "../Modelo/Plomero.php";
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
    $Cliente = new Cliente("", "", "", $correo, $clave);
    if($Cliente -> autenticar()){

            $_SESSION["id"] = $Cliente -> getId();
            
			echo '<script>
   			 window.location.href = "../index.php?pagina=SesionCliente";
    		</script>';

    }else{
    $Plomero = new Plomero("","","", $correo, $clave);
        if($Plomero ->autenticar()){

            $_SESSION["id"] = $Plomero -> getId();

            echo "Hola";
            echo '<script>
   			 window.location.href = "../index.php?pagina=SesionPlomero";
    	</script>';

        }else{
        echo '<script>
                 alert("Usuario no existe");
             window.location.href = "../index.php?pagina=Ingreso";
              </script>';
 
}
}
}

