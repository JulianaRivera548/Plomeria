<?php

require_once "Conexion.php";

class MostrarDAO{

    static public function mostrar($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
    static public function mostrarDescripcionServicio($idCliente){
        $stmt = Conexion::conectar()->prepare("Select cl.idCliente, ds.Descripcion, ser.Valor_Servicio from detalle_servicio ds join servicio ser on (ser.Detalle_Servicio_idDetalle_Servicio = ds.idDetalle_Servicio) join cliente cl on (cl.idCliente = ser.Cliente_idCliente) WHERE cl.idCliente = $idCliente;");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }

}

?>