<?php
class AdministradorDAO{
    
    private $id;
    
    private $nombre;
    
    private $apellido;
    
    private $correo;
    
    private $clave;
    
    
    public function AdministradorDAO($id , $nombre , $apellido , $correo, $clave)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
       
    }
    
    public function Autenticar(){
       return "select idAdministrador
                from administrador where Correo = '" . $this -> correo . "' and Clave = '" . $this -> clave . "'";
    
    }
    
    public function existeCorreo(){
        return "select count(idAdministrador)
                from administrador
                where Correo = '" . $this -> correo . "'";
    }
    
    public function Consultar(){
        return "select nombre, apellido, correo
                from administrador
                where idAdministrador = '" . $this -> id . "'";
    }
    
    
    
    
}