<?php
session_start();
if(isset($_GET["sesion"]) && $_GET["sesion"] == "false"){
    $_SESSION["id"] = "";
    $_SESSION["rol"] = "";
}

include "controlador/ctrCliente.php";
include "controlador/ctrPlantilla.php";
$plantilla = new ctrPlantilla();
$plantilla->plantilla();


?>