<?php

include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";

class ctrPlomero{
    static public function mostrar1($id){
        
        $resp = MostrarDAO::mostrar1d($id);
        return $resp;
    }
    static public function mostrar($tabla,$tabla2,$tabla3,$tabla4,$tabla5,$id){
        
        $resp = MostrarDAO::mostrarSerPlo($tabla,$tabla2,$tabla3,$tabla4,$tabla5,$id);

        return $resp;
    }
    static public function mostrarTotalDatos($id,$tabla,$tabla2,$tabla3){
        
        $resp = MostrarDAO::mostrarSerDat($id,$tabla,$tabla2,$tabla3);

        return $resp;
    }
    static public function Actuali_Plo($val1,$val2,$val3,$val4){
        

        $resp = MostrarDAO::Actualizar_Dat($val1,$val2,$val3,$val4);
        
    }
    static public function mostraractivacion($val){
        

        $resp = MostrarDAO::mostraract($val);
        return $resp;
    }
}


?>