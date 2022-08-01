<?php

class Detalle_Servicio {
    private $id;
    private $repuestos;
    private $descripcion;
    private $garantia;
    private $insumos;
    
    function __construct($id, $repuestos, $descripcion, $garantia, $insumos) {
        $this->id = $id;
        $this->repuestos = $repuestos;
        $this->descripcion = $descripcion;
        $this->garantia = $garantia;
        $this->insumos = $insumos;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getRepuestos() {
        return $this->repuestos;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getGarantia() {
        return $this->garantia;
    }

    function getInsumos() {
        return $this->insumos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRepuestos($repuestos) {
        $this->repuestos = $repuestos;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setGarantia($garantia) {
        $this->garantia = $garantia;
    }

    function setInsumos($insumos) {
        $this->insumos = $insumos;
    }



}
