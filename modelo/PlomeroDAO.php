<?php
class PlomeroDAO{

    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $clave;
    private $id_admin;
    private $certificado;

    private $Plomero;
    public function __construct($id=0, $nombre="", $apellido="", $correo="", $clave="", $telefono="",$id_admin="", $certificado="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> telefono = $telefono;
        $this -> clave = $clave;
       $this -> id_admin = $id_admin;
        $this -> certificado= $certificado;

    }
    
    public function crear(){
        return "insert into plomero (nombre, apellido, correo, clave)
                values (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "',
                '" . $this -> correo . "',
                '" . $this -> clave . "'
               
                )";
    }
    
    public function Autenticar(){
        return "select idPlomero
                from plomero where Correo = '" . $this -> correo . "' and Clave = '" . $this -> clave . "'";
        
    }
    
    
    public function Consultar(){
        return "select nombre, apellido, correo
                from plomero
                where idPlomero = '" . $this -> id . "'";
    }


    public function consultarTodos(){
        return "select idPlomero, Nombre, Apellido, Correo, Telefono, Certificado_idCertificado
                from plomero";
    }

    
    
  
}
?>