<?php
session_start();



include "controlador/ctrCliente.php";
include "controlador/ctrPlantilla.php";
include "controlador/ctrPlomero.php";
$plantilla = new ctrPlantilla();
$plantilla->plantilla();


?>