<?php

include_once "modelo/MostrarDAO.php";
include_once "modelo/Fecha.php";

class ctrCliente{

    static public function mostrarClientes(){
        $tabla = "cliente";

        $resp = MostrarDAO::mostrar($tabla);

        return $resp;
    }

    static public function mostrarTipos_servicio(){
        $tabla = "tipo_servicio";

        $resp = MostrarDAO::mostrar($tabla);

        return $resp;
    }

}


?>