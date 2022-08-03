<?php
require_once 'Conexion.php';
require_once 'AdministradorDAO.php';
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
    
    public function __construct($id="", $nombre="", $apellido="", $correo="", $clave=""){
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
        $this -> Conexion -> ejecutar($this -> AdministradorDAO -> Autenticar());
        $this -> Conexion -> cerrar();
        if($this -> Conexion -> numFilas() == 1){
            $this -> id = $this -> Conexion -> extraer()[0];
            return true;
            
        }else{
            return false;
        }
    }
    
    public function existeCorreo(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> AdministradorDAO -> existeCorreo());
        $resultado = $this -> Conexion -> extraer();
        $this -> Conexion -> cerrar();
        return ($resultado[0]==0)?false:true;
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
    
    
}

?>