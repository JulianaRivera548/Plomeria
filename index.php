<?php
session_start();



include "controlador/ctrCliente.php";
include "controlador/ctrPlantilla.php";
include "controlador/ctrPlomero.php";
include "controlador/ctrPDF.php";
include "controlador/ctrServicio.php";
include "controlador/crtAdministrador.php";
$plantilla = new ctrPlantilla();
$plantilla->plantilla();

?>