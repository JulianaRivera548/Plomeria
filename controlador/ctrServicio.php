<?php

include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";
include_once "modelo/FacturaDAO.php";

class ctrServicio{

    static public function mostrar($tabla,$tabla2,$tabla3,$tabla4,$tabla5){
        
        $resp = MostrarDAO::mostrarSer($tabla,$tabla2,$tabla3,$tabla4,$tabla5);

        return $resp;
    }

    static public function Asignar_plomero($val1,$val2){
        

        $resp = MostrarDAO::Asignar_plomero($val1,$val2);
        
    }

    static public function Asignar_total($val1,$val2){
        

        $resp = FacturaDAO::Asignar_total($val1,$val2);
        
    }


    


}
