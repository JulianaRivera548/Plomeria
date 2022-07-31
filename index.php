

<?php
session_start();
require_once 'Modelo/Administrador.php'; 
if(isset($_GET["sesion"]) && $_GET["sesion"] == "false"){
    $_SESSION["id"] = "";
    $_SESSION["rol"] = "";
}

$pid = "";
if (isset($_GET["pid"])) {
    $pid = base64_decode($_GET["pid"]);
}

$paginasSinSesion = array(
    "Vista/Ingreso.php",
 
)
?>

<html>
<head>

<meta charset="UTF-8">

<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
<link rel="icon" type="image/png" href="imagenes/imagencon.png" />


 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">	

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	crossorigin="anonymous"></script>

</head>


<?php

if ($pid != "") {
    
    if(in_array($pid, $paginasSinSesion)){
        include $pid;
    }else{
        if(isset($_SESSION["id"]) && $_SESSION["id"] != ""){
            include $pid;
        }else{
            include 'Vista/Ingreso.php';
        }
    }
    
    
} else {
    include 'Vista/Inicio.php';
}
?>
