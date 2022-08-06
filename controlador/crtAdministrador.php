<?php
include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";
class crtAdministrador{

    static public function mostrar($tabla){
        
        $resp = MostrarDAO::mostrar($tabla);
echo MostrarDAO::mostrar($tabla);
        return $resp;
    }



}
?>