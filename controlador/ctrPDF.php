<?php

class ctrPDF{
    
    static public function datosServicio(){

        return ServicioDAO::obtenerDatosServicio($_GET['id']);

    }
}

?>