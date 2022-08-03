<?php
include_once 'modelo/Administrador.php';
if(!isset($_SESSION)) { 
session_start; 
}


$Administrador = new Administrador($_SESSION["id"]);  
$Administrador->Consultar();
$_SESSION["nombre"]=$Administrador->getNombre();
$_SESSION["apellido"]=$Administrador->getApellido();
