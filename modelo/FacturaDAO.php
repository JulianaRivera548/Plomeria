<?php

include_once './modelo/Conexion.php';
include_once './modelo/Factura.php';
include_once './modelo/Fecha.php';

class FacturaDAO {
    private $factura;
    
    function __construct($factura) {
        $this->factura = $factura;
    }
    
    function insertarFactura(){
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT idFactura FROM factura ORDER by idFactura DESC limit 1;");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(count($res) > 0){
            foreach ($res as $row){
                $id = $row['idFactura'];
            }
            $this->factura->setId($id+1);
        } else {
            $id=1;
            $this->factura->setId($id);
        }
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
        
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO Factura Values (:id, :valorVisita, :valorTotal, :fecha, :hora, :idCliente)");
        $stmt->bindParam(':id', $this->factura->getId());
        $stmt->bindParam(':valorVisita', $this->factura->getValor_visita());
        $stmt->bindParam(':valorTotal', $this->factura->getValor_total());
        $stmt->bindParam(':fecha', $this->factura->getFecha()->fechaVacia());
        $stmt->bindParam(':hora', $this->factura->getHora());
        $stmt->bindParam(':idCliente', $this->factura->getId_cliente());
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
    }
    function updateFactura($valor, $idFactura){
        $visita = 0;
        $stmt = Conexion::conectar()->prepare("UPDATE Factura SET Valor_Total = :valorTotal, Valor_Visita = :valorVisita  WHERE idFactura = :idFactura");
        $stmt->bindParam(':valorTotal', $valor);
        $stmt->bindParam(':valorVisita', $visita);
        $stmt->bindParam(':idFactura', $idFactura);
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
    }
    function consultarPorCliente($idCliente){
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM Factura WHERE Cliente_idCliente = :idCliente");
        $stmt->bindParam('idCliente', $idCliente);
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
    }

    function obtenerDatosFactura($idServicio){
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT fa.* FROM factura fa join servicio se on (fa.idFactura = se.Factura_idFactura) WHERE se.idServicio = $idServicio;");
        $stmt->execute();
        $res = $stmt->fetchAll();

        $this->factura = new Factura(0);
        $this->factura->obtenerDatos($res[0]['idFactura'], $res[0]['Valor_Total'], $res[0]['Valor_Visita'], $res[0]['Fecha']);
        return $this->factura;
    }

    function Total($valor, $idFactura){
        $visita = 0;
        $stmt = Conexion::conectar()->prepare("UPDATE Factura SET Valor_Total = :valor  WHERE idFactura = :idFactura");
        $stmt->bindParam(':valorTotal', $valor);
        $stmt->bindParam(':idFactura', $idFactura);
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
    }  


    static public function Asignar_total($val1, $val2){
        $stmt2 = Conexion::conectar()->prepare("UPDATE factura SET Valor_Total=$val1 where idFactura = $val2");
        $stmt2->execute();
        $stmt2->closeCursor();
        $stmt2 = null;
    }

    function getFactura() {
        return $this->factura;
    }

    function setFactura($factura) {
        $this->factura = $factura;
    }
}

?>