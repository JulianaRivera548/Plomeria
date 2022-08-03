<?php

include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";

class ctrPlomero{
    static public function mostrar1($id){
        
        $resp = MostrarDAO::mostrar1d($id);
        return $resp;
    }
    static public function mostrar($tabla,$tabla2,$tabla3,$tabla4,$id){
        
        $resp = MostrarDAO::mostrarSerPlo($tabla,$tabla2,$tabla3,$tabla4,$id);

        return $resp;
    }
    static public function mostrarTotalDatos($id,$tabla,$tabla2,$tabla3){
        
        $resp = MostrarDAO::mostrarSerDat($id,$tabla,$tabla2,$tabla3);

        return $resp;
    }
    static public function Actuali_Plo($ids){
        if(!isset($_SESSION)){
            session_start();
        }
        $resp = MostrarDAO::Actualizar_Dat($_SESSION['ValorRep'],$ids);
        
        
    }
    static public function Actuali_Plo2($ids){
        if(!isset($_SESSION)){
            session_start();
        }
        $resp = MostrarDAO::Actualizar_Dat2($_SESSION['DetallePlo'],$ids);
        
    }
    
}


?>