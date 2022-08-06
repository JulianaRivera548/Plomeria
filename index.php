<?php
session_start();



include "controlador/ctrCliente.php";
include "controlador/ctrPlantilla.php";
include "controlador/ctrPlomero.php";
include "controlador/ctrPDF.php";
$plantilla = new ctrPlantilla();
$plantilla->plantilla();

?>