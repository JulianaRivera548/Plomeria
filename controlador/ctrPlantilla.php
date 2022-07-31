<?php

class ctrPlantilla{

    public function plantilla(){
        include_once "modelo/MostrarDAO.php";
        include_once "modelo/Fecha.php";
        include "Vista/plantilla.php";
    }
}


?>