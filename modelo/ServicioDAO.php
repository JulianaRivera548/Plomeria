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

        $fechaProv = "00-00-0000";
        $idPlomero = 1;
        $idEstado = 1;

        $stmt = $con->prepare("INSERT INTO servicio VALUES (:idServicio, :ValorServicio, :Fecha, :Cliente_idCliente, :Tipo_Servicio_idTipo_Servicio"
                . ", :Direccion, :Factura_idFactura, :Factura_Cliente_idCliente, :Detalle_Servicio_idDetalle_Servicio, :Administrador_idAdministrador"
                . ", :Estado_idEstado, :idPlomero);");
        $stmt->bindParam(':idServicio', $this->servicio->getId());
        $stmt->bindParam(':ValorServicio', $this->servicio->getValorServicio());
        $stmt->bindParam(':Fecha', $fechaProv);
        $stmt->bindParam(':Cliente_idCliente', $this->servicio->getIdCliente());
        $stmt->bindParam(':Tipo_Servicio_idTipo_Servicio', $this->servicio->getIdTipoServicio());
        $stmt->bindParam(':Direccion', $this->servicio->getDireccion());
        $stmt->bindParam(':Factura_idFactura', $this->servicio->getFactura()->getId());
        $stmt->bindParam(':Factura_Cliente_idCliente', $this->servicio->getFactura()->getId_cliente());
        $stmt->bindParam(':Detalle_Servicio_idDetalle_Servicio', $this->servicio->getDetalleServicio()->getId());
        $stmt->bindParam(':Administrador_idAdministrador', $this->servicio->getIdAdministrador());
        $stmt->bindParam(':Estado_idEstado', $idEstado);
        $stmt->bindParam(':idPlomero', $idPlomero);
        $stmt->execute();
        
        $stmt->closeCursor();
        $stmt = null;        
        $con = null;
        
    }
    static public function actualizarEstado($idPedido){
        $stmt = Conexion::conectar()->prepare("update servicio set Estado_idEstado = 2 where idServicio = $idPedido;");
        $stmt->execute();
        
        $stmt->closeCursor();
        $stmt = null;
    }
    static public function actualizarValor($idServicio, $valor){
        $stmt = Conexion::conectar()->prepare("update servicio set Valor_Servicio = $valor where idServicio = $idServicio;");
        $stmt->execute();
        
        $stmt->closeCursor();
        $stmt = null;
    }
    
    
    function getServicio() {
        return $this->servicio;
    }

    function setServicio($servicio) {
        $this->servicio = $servicio;
    }



}
