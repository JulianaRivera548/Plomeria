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

    function fechaVacia(){
        $this->dia = "00";
        $this->mes = "00";
        $this->año = "0000";
        $this->fecha = $this->dia."-".$this->mes."-".$this->año;
        echo $this->fecha;
        return $this->fecha;
    }

    function horaVacia(){
        $this->hora = "00:00";
        return $this->hora;
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