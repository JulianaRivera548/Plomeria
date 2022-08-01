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

}

?>