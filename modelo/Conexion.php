<?php

class Conexion{
    static public function conectar(){
        $con = new PDO(
            "mysql:host=localhost;dbname=bd_plomeria",
            "root",
            ""
        );
        $con->exec("set names utf8mb4");

        return $con;
    }
}


?>