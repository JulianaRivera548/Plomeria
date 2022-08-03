<?php
class PlomeroDAO{

    private $Plomero;
    public function __construct($Plomero) {
        $this->plomero = $PlomeroP
    }
    
    public function crear(){
        return "insert into plomero (nombre, apellido, correo, clave, codigo_activacion)
                values (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "',
                '" . $this -> correo . "',
                '" . md5($this -> clave) . "',
                '" . $this -> codigo_activacion . "'
                )";
    }
    
    public function Autenticar(){
        return "select idPlomero
                from plomero where Correo = '" . $this -> correo . "' and Clave = '" . $this -> clave . "'";
        
    }
    
    
    public function Consultar(){
        return "select nombre, apellido, correo
                from administrador
                where idAdministrador = '" . $this -> id . "'";
    }
    
    
  
}
?>