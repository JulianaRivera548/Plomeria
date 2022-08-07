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
    
    static public function actualizarEstado($idPedido){
        
        ServicioDAO::actualizarEstado($idPedido);

    }

    static public function actualizarValor($idServicio, $valor){
        
        ServicioDAO::actualizarValor($idServicio, $valor);

    }

    static public function mostrarDetalles($idServicio){

        $detalle = Detalle_ServicioDAO::consultarDetalleServicio($idServicio);
        //echo var_dump($detalle);
        return $detalle->toString();

    }

    static public function getTipoServicio($idTipServicio){

        return ServicioDAO::getTipoServicio($idTipServicio);
        
    }

    
    

}


?>