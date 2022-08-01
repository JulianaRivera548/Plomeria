<?php

include_once './modelo/FacturaDAO.php';
include_once './modelo/Detalle_ServicioDAO.php';

class ServicioDAO {
    private $servicio;
    
    function __construct($servicio) {
        $this->servicio = $servicio;
    }
    
    function insertarServicio($idCliente, $detSer){
        $factura = new FacturaDAO(new Factura($idCliente));
        $factura->insertarFactura();
        $this->servicio->setFactura($factura->getFactura());
        $this->servicio->setIdCliente($factura->getFactura()->getId_cliente());
        $this->servicio->setValorServicio($factura->getFactura()->getValor_visita());
        
        $detalleServicio = new Detalle_ServicioDAO(new Detalle_Servicio($detSer));
        $detalleServicio->insertarTodoDetalleServicio();
        $this->servicio->setDetalleServicio($detalleServicio->getDetalleServicio());
        
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT idServicio FROM servicio ORDER by idServicio DESC limit 1;");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(count($res) > 0){
            foreach ($res as $row){
                $id = $row['idServicio'];
            }
            $this->servicio->setId($id+1);
        } else {
            $id=1;
            $this->servicio->setId($id);
        }
        $stmt->closeCursor();
        $stmt = null;
        
        
        $stmt = $con->prepare("INSERT INTO servicio VALUES (:idServicio, :ValorServicio, :Fecha, :Cliente_idCliente, :Tipo_Servicio_idTipo_Servicio"
                . ", :Direccion, :Factura_idFactura, :Factura_Cliente_idCliente, :Detalle_Servicio_idDetalle_Servicio, :Administrador_idAdministrador"
                . ", :Estado_idEstado);");
        $stmt->bindParam(':idServicio', $this->servicio->getId());
        $stmt->bindParam(':ValorServicio', $this->servicio->getValorServicio());
        $stmt->bindParam(':Fecha', $this->servicio->getFecha());
        $stmt->bindParam(':Cliente_idCliente', $this->servicio->getIdCliente());
        $stmt->bindParam(':Tipo_Servicio_idTipo_Servicio', $this->servicio->getIdTipoServicio());
        $stmt->bindParam(':Direccion', $this->servicio->getDireccion());
        $stmt->bindParam(':Factura_idFactura', $this->servicio->getFactura()->getId());
        $stmt->bindParam(':Factura_Cliente_idCliente', $this->servicio->getFactura()->getId_cliente());
        $stmt->bindParam(':Detalle_Servicio_idDetalle_Servicio', $this->servicio->getDetalleServicio()->getId());
        $stmt->bindParam(':Administrador_idAdministrador', $this->servicio->getIdAdministrador());
        $stmt->bindParam(':Estado_idEstado', $this->servicio->getId());
        $stmt->execute();
        
        $stmt->closeCursor();
        $stmt = null;        
        $con = null;
        
    }
    
    
    function getServicio() {
        return $this->servicio;
    }

    function setServicio($servicio) {
        $this->servicio = $servicio;
    }



}
