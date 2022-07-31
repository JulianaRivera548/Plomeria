<?php
require_once 'Modelo/Conexion.php';
require_once 'Modelo/AdministradorDAO.php';
class Administrador{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $Conexion;
    private $AdministradorDAO;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellido()
    {
        return $this->apellido;
    }
    
    public function getCorreo()
    {
        return $this->correo;
    }
    
    public function Administrador($id="", $nombre="", $apellido="", $correo="", $clave=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> Conexion = new Conexion();
        $this -> AdministradorDAO = new AdministradorDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave);
    }
    
    public function autenticar(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> AdministradorDAO -> autenticar());
        $this -> Conexion -> cerrar();
        if($this -> Conexion -> numFilas() == 1){
            $this -> id = $this -> Conexion -> extraer()[0];
            return true;
        }else{
            return false;
        }
    }
    
    public function consultar(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> AdministradorDAO -> consultar());
        $this -> Conexion -> cerrar();
        $datos = $this -> Conexion -> extraer();
        $this -> nombre = $datos[0];
        $this -> apellido = $datos[1];
        $this -> correo = $datos[2];
    }
    
    
    public function consultarTodos(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> AdministradorDAO -> ConsultarTodos());
        $administradores = array();
        while(($resultado = $this -> Conexion -> extraer()) != null){
            array_push($administradores, new administrador($resultado[0], $resultado[1], $resultado[2], $resultado[3], ""));
        
        }
        $this -> Conexion -> cerrar();
        return  $administradores;
    }
    
    
}

?>