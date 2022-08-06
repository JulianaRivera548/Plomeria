<?php

include_once './modelo/Conexion.php';
include_once './modelo/Detalle_Servicio.php';

class Detalle_ServicioDAO {
    
    private $detalleServicio;
    
    function __construct($detalleSericio) {
        $this->detalleServicio = $detalleSericio;
    }
    
    function insertarTodoDetalleServicio(){
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT idDetalle_Servicio FROM detalle_servicio ORDER by idDetalle_Servicio DESC limit 1;");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(count($res) > 0){
            foreach ($res as $row){
                $id = $row['idDetalle_Servicio'];
            }
            $this->detalleServicio->setId($id+1);
        } else {
            $id=1;
            $this->detalleServicio->setId($id);
        }
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
        
        $con = Conexion::conectar();
        $stmt = $con->prepare("INSERT INTO Detalle_Servicio Values (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $this->detalleServicio->getId());
        $stmt->bindParam(2, $this->detalleServicio->getRepuestos());
        $stmt->bindParam(3, $this->detalleServicio->getDescripcion());
        $stmt->bindParam(4, $this->detalleServicio->getGarantia());
        $stmt->bindParam(5, $this->detalleServicio->getInsumos());
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
    }
    function insertarDetalleServicioCliente(){
        
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT idDetalle_Servicio FROM detalle_servicio ORDER by idDetalle_Servicio DESC limit 1;");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(count($res) > 0){
            foreach ($res as $row){
                $id = $row['idDetalle_Servicio'];
            }
            $this->detalleServicio->setId($id+1);
        } else {
            $id=1;
            $this->detalleServicio->setId($id);
        }
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
        
        
        $vacio = "";
        $stmt = Conexion::conectar()->prepare("INSERT INTO Detalle_Servicio Values (:id, :repuestos, :descripcion, :garantia, :insumos)");
        $stmt->bindParam(':id', $this->detalleServicio->getId());
        $stmt->bindParam(':repuestos', $vacio);
        $stmt->bindParam(':descripcion', $this->detalleServicio->getDescripcion());
        $stmt->bindParam(':garantia', $vacio);
        $stmt->bindParam(':insumos', $vacio);
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
        $con = null;
    }

    static public function consultarDetalleServicio($idServicio){
        $con = Conexion::conectar();
        $stmt = $con->prepare("select ds.* from detalle_servicio ds join servicio ser on (ds.idDetalle_Servicio = ser.Detalle_Servicio_idDetalle_Servicio) where ser.idServicio = $idServicio;");
        $stmt->execute();
        $res = $stmt->fetchAll();
        $detalleServicio = new Detalle_Servicio("");
        $detalleServicio->insertarDatos($res[0]);
        return $detalleServicio;
    }
    
    function obtenerDatos($idServicio){
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT ds.* FROM detalle_servicio ds join servicio se on (ds.idDetalle_Servicio = se.Detalle_Servicio_idDetalle_Servicio) WHERE se.idServicio = $idServicio;");
        $stmt->execute();
        $res = $stmt->fetchAll();

        $this->detalleServicio = new Detalle_Servicio("");
        $this->detalleServicio->obtenerDatos($res[0]['idDetalle_Servicio'], $res[0]['Repuestos'], $res[0]['Descripcion'], $res[0]['Garantia'], $res[0]['Insumos']);
        return $this->detalleServicio;
    }
    
    
    
    function getDetalleServicio() {
        return $this->detalleServicio;
    }

    function setDetalleServicio($detalleServicio) {
        $this->detalleServicio = $detalleServicio;
    }



    
}


?>