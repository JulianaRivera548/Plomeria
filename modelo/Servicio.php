<?php

class Servicio {
    private $id;
    private $valorServicio;
    private $fecha;
    private $idCliente;
    private $TipoServicio;
    private $direccion;
    private $Factura;
    private $DetalleServicio;
    private $idAdministrador;
    private $estado;
    
    function __construct($id, $idCliente, $Factura, $DetalleServicio, $idAdministrador) {
        $this->id = $id;
        $fecha = new Fecha();
        $this->fecha = $fecha->getFecha();
        $this->idCliente = 0;
        $this->TipoServicio = "";
        $this->direccion = "cra 12 #34-56";
        $this->Factura = $Factura;
        $this->valorServicio = $Factura->valor_visita;
        $this->DetalleServicio = $DetalleServicio;
        $this->idAdministrador = $idAdministrador;
        $this->estado = "no pago";
    }

    
    
    
    function getId() {
        return $this->id;
    }

    function getValorServicio() {
        return $this->valorServicio;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getTipoServicio() {
        return $this->TipoServicio;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getFactura() {
        return $this->Factura;
    }

    function getDetalleServicio() {
        return $this->DetalleServicio;
    }

    function getIdAdministrador() {
        return $this->idAdministrador;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValorServicio($valorServicio) {
        $this->valorServicio = $valorServicio;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setTipoServicio($TipoServicio) {
        $this->TipoServicio = $TipoServicio;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setFactura($Factura) {
        $this->Factura = $Factura;
    }

    function setDetalleServicio($DetalleServicio) {
        $this->DetalleServicio = $DetalleServicio;
    }

    function setIdAdministrador($idAdministrador) {
        $this->idAdministrador = $idAdministrador;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


    
}
