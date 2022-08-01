<?php

class Fecha{
    private $dia;
    private $mes;
    private $año;
    private $fecha;
    private $hora;
            
    function __construct() {
        date_default_timezone_set('Etc/GMT+5');
        $this->dia = date("d");
        $this->mes = date("m");
        $this->año = date("Y");
        $this->fecha = date("d-m-Y");
        $this->hora = date("H:i");
    }

    function getHora() {
        return $this->hora;
    }

        function getDia() {
        return $this->dia;
    }

    function getMes() {
        return $this->mes;
    }

    function getAño() {
        return $this->año;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setMes($mes) {
        $this->mes = $mes;
    }

    function setAño($año) {
        $this->año = $año;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
}


?>