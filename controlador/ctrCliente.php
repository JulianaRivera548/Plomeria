<?php

class ctrCliente{

    static public function mostrarClientes(){
        $tabla = "cliente";

        $resp = ClienteDAO::mostrarClientes($tabla);

        return $resp;
    }

}


?>