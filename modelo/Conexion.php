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
    
    
    private $mysqli;
    private $resultado;
    
    public function abrir(){
        $this -> mysqli = new mysqli("localhost", "root", "", "bd_plomeria");
        $this -> mysqli -> set_charset("utf8");
        
    }
    
    public function cerrar(){
        $this -> mysqli -> close();
    }
    
    public function ejecutar($sentencia){
       
        $this -> resultado = $this -> mysqli -> query($sentencia);
        
    }
    
    public function extraer(){
        return $this -> resultado -> fetch_row();
    }
    
    public function numFilas(){
        return ($this -> resultado != null) ? $this -> resultado -> num_rows : 0;
    }
    
}


?>