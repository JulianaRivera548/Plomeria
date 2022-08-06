<?php

class Servicio {
    private $id;
    private $valorServicio;
    private $fecha;
    private $idCliente;
    private $idTipoServicio;
    private $direccion;
    private $Factura;
    private $DetalleServicio;
    private $idAdministrador;
    private $estado;
    private $plomero;
    
    function __construct($idTipoServicio, $idAdministrador) {
        $this->id = 0;
        $fecha = new Fecha();
        $this->fecha = $fecha->getFecha();
        $this->idCliente = 0;
        $this->idTipoServicio = $idTipoServicio;
        $this->direccion = "cra 12 #34-56";
        $this->Factura = NULL;
        $this->valorServicio = 0;
        $this->DetalleServicio = NULL;
        $this->idAdministrador = $idAdministrador;
        $this->estado = 1;
        $this->plomero = "";
    }

    function obtenerDatos($id, $fecha, $idCliente, $idTipoServicio, $direccion, $Factura, $valorServicio, $DetalleServicio, $idAdministrador, $estado){
        $this->id = $id;
        $this->fecha = $fecha;
        $this->idCliente = $idCliente;
        $this->idTipoServicio = $idTipoServicio;
        $this->direccion = $direccion;
        $this->Factura = $Factura;
        if($valorServicio != 10000){
            $this->Factura->setValor_total($valorServicio);
        }
        else{
            $this->Factura->setValor_total(0);
        }
        $this->valorServicio = $valorServicio;
        $this->DetalleServicio = $DetalleServicio;
        $this->idAdministrador = $idAdministrador;
        $this->estado = $estado;
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

    function getIdTipoServicio() {
        return $this->idTipoServicio;
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
