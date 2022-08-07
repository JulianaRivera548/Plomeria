<?php

class Factura {
    private $id;
    private $valor_visita;
    private $valor_total;
    private $fecha;
    private $hora;
    private $id_cliente;
    
    function __construct($id_cliente) {
        $this->id = 0;
        $this->id_cliente = $id_cliente;
        $this->valor_total = 0;
        $this->valor_visita = 10000;
        $this->fecha = new Fecha();
        $this->hora = $this->fecha->getHora();
    }

    function obtenerDatos($id, $valor_total, $valor_visita, $fecha){
        $this->id = $id;
        $this->valor_total = $valor_total;
        $this->valor_visita = $valor_visita;
        $this->fecha = $fecha;
    }
    
    function aceptación($valor, $acepta){
        if($acepta){
            $this->valor_total = $valor;
            $this->valor_visita = 0;
        }else{
            $this->valor_total = $this->valor_visita;
        }
        return $this->valor_total;
    }

   
            
    
    function getId() {
        return $this->id;
    }

    function getValor_visita() {
        return $this->valor_visita;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValor_visita($valor_visita) {
        $this->valor_visita = $valor_visita;
    }

    function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }



}


?>