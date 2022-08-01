<?php

class FacturaDAO {
    private $factura;
    
    function __construct($factura) {
        $this->factura = $factura;
    }
    
    function insertarFactura(){
        $stmt = Conexion::conectar()->prepare("INSERT INTO Factura Values (:id, :valorVisita, :valorTotal, :fecha, :hora, :idCliente");
        $stmt->bindParam(':id', $this->factura->getID);
        $stmt->bindParam(':valorVisita', $this->factura->getValor_visita());
        $stmt->bindParam(':valorTotal', $this->factura->getValor_total());
        $stmt->bindParam(':fecha', $this->factura->getFecha());
        $stmt->bindParam(':hora', $this->factura->getHora());
        $stmt->bindParam(':idCliente', $this->factura->getId_cliente());
        $stmt->execute();
    }
    

    function getFactura() {
        return $this->factura;
    }

    function setFactura($factura) {
        $this->factura = $factura;
    }
}
