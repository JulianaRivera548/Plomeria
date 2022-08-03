<?php
session_start();



include "controlador/ctrCliente.php";
include "controlador/ctrPlantilla.php";
$plantilla = new ctrPlantilla();
$plantilla->plantilla();


?>