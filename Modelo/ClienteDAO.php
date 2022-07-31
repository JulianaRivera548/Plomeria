<?php

require_once "Conexion.php";

class ClienteDAO{

    static public function mostrarClientes($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }

}

?>