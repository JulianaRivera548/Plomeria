<?php

class ctrPlantilla{

    public function plantilla(){
        
        include_once "modelo/MostrarDAO.php";
        include_once "modelo/Fecha.php";
        include_once "modelo/Servicio.php";
        include_once "modelo/ServicioDAO.php";
        include_once "modelo/Administrador.php";
        include_once "modelo/ClienteDAO.php";
        include_once "modelo/Plomero.php";
        include_once "modelo/Certificado.php";
        include_once "modelo/Plomero.php";
         //include_once "modelo/.php";
        include "Vista/plantilla.php";
    }
}


?>