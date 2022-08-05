<?php

require_once "Conexion.php";

class MostrarDAO{
    static public function mostrar1d($id){
        $stmt = Conexion::conectar()->prepare("SELECT Nombre, Correo FROM plomero pl WHERE $id=pl.idPlomero");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
    static public function mostrar($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
    static public function mostrarDescripcionServicio($idCliente){
        $stmt = Conexion::conectar()->prepare("Select cl.idCliente, ds.Descripcion, ser.Valor_Servicio, ds.Insumos, fac.Valor_Visita, fac.Valor_Total, ser.Estado_idEstado, ser.idServicio from detalle_servicio ds join servicio ser on (ser.Detalle_Servicio_idDetalle_Servicio = ds.idDetalle_Servicio) join cliente cl on (cl.idCliente = ser.Cliente_idCliente) join factura fac on (fac.idFactura = ser.Factura_idFactura) WHERE cl.idCliente = $idCliente;");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
    static public function mostrarSerPlo($tabla,$tabla2,$tabla3,$tabla4,$id){
        $stmt = Conexion::conectar()->prepare("SELECT cl.Nombre, se.idServicio ,cl.idCliente, se.Valor_Servicio,dt.idDetalle_Servicio ,dt.Descripcion FROM $tabla2 se JOIN $tabla pl ON(se.id_plomero=$id) JOIN $tabla3 cl ON(cl.idCliente=se.Cliente_idCliente) JOIN $tabla4 dt ON(dt.idDetalle_Servicio = se.Detalle_Servicio_idDetalle_Servicio)");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function mostrarSerDat($id,$tabla,$tabla2,$tabla3){
        $stmt = Conexion::conectar()->prepare("SELECT  ts.Tipo_Servicio, se.Direccion, cl.Telefono, cl.Nombre FROM $tabla se JOIN $tabla3 cl ON (se.Cliente_idCliente=cl.idCliente) JOIN $tabla2 ts ON (ts.idTipo_Servicio= se.Tipo_Servicio_idTipo_Servicio) WHERE se.idServicio=$id");
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function Actualizar_Dat(){
        if(!isset($_SESSION)){
            session_start();
        }
        $val=$_SESSION['ValorRep'];
        $ids=$_SESSION['usuid'];
        $stmt = Conexion::conectar()->prepare("UPDATE servicio SET Valor_Servicio=$val WHERE idServicio=$ids");
        $stmt->execute();
        $stmt->closeCursor();
        $stmt = null;
       
    }
    
    static public function Actualizar_Dat2(){
        if(!isset($_SESSION)){
            session_start();
        }
        $txt=$_SESSION['DetallePlo'];
        $ids=$_SESSION['usuid'];
        echo "algo".$ids;
        $stmt2 = Conexion::conectar()->prepare("UPDATE detalle_servicio dt SET dt.Descripcion ='$txt' WHERE dt.idDetalle_Servicio =(SELECT se.Detalle_Servicio_idDetalle_Servicio FROM servicio se JOIN  detalle_servicio dt ON(dt.idDetalle_Servicio=se.Detalle_Servicio_idDetalle_Servicio AND se.idServicio = $ids))");
        $stmt2->execute();
        $stmt2->closeCursor();
        $stmt2 = null;
    }


}

?>