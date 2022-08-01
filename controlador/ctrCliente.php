<?php

include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";

class ctrCliente{

    static public function mostrar($tabla){
        
        $resp = MostrarDAO::mostrar($tabla);

        return $resp;
    }

    static public function mostrarDescripcionServicio($idCliente){
        
        $resp = MostrarDAO::mostrarDescripcionServicio($idCliente);

        return $resp;
    }
    
    static public function nuevoServicio($idTipoServicio, $idAdministrador, $idCliente, $detallesServicio){
        
        $servicio = new ServicioDAO(new Servicio($idTipoServicio, $idAdministrador));
        $servicio->insertarServicio($idCliente, $detallesServicio);
        
    }

}


?>