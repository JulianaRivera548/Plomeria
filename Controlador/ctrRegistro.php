<?php
include_once "../Modelo/Administrador.php";
include_once '../Modelo/Cliente.php';
$error = 0;
if(isset($_POST["crear"])){
    $Cliente= new Cliente("", $_POST["nombre"], $_POST["apellido"], $_POST["correo"], $_POST["clave"], $_POST["cedula"],$_POST["metodo_pago"],$_POST["telefono"]);
    echo "", $_POST["nombre"], $_POST["apellido"], $_POST["correo"], $_POST["clave"], $_POST["cedula"],$_POST["metodo_pago"],$_POST["telefono"];
  $Administrador = new Administrador("", "", "", $_POST["correo"]);  
    if(!$Cliente -> existeCorreo() && !$Administrador -> existeCorreo()){
        $id = $Cliente -> crear();
    }else{
        echo '<script> 
            alert("Este correo ya existe");
            window.location.href = "../index.php?pagina=Registro";
        </script>';
        
    }
}
?>