<?php
require_once "Conexion.php";
require_once "PlomeroDAO.php";

class Plomero{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $clave;
    private $id_admin;
    private $certificado;
    private $conexion;
    private $PlomeroDAO;
    
    /**
     * @return
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    
    /**
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    
    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }
    
    
    
    /**
     * @return mixed
     */
    public function getId_admin()
    {
        return $this->id_admin;
    }
    
    /**
     * @return mixed
     */
    public function getCertificado()
    {
        return $this->certificado;
    }


    public function __construct($id=0, $nombre="", $apellido="", $correo="",$clave="", $telefono="", $id_admin="", $certificado="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> telefono = $telefono;
       
        $this -> id_admin = $id_admin;
        $this -> certificado= $certificado;
        $this -> Conexion = new Conexion();
        $this -> PlomeroDAO = new PlomeroDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave, $this -> telefono, $this -> id_admin , $this->certificado);
    }
    
   
    
    public function autenticar(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> PlomeroDAO -> autenticar());
        if($this -> Conexion -> numFilas() == 0){
            return false;
        }else{
            $resultado = $this -> Conexion -> extraer();
            $this -> id = $resultado[0];
            return true;
        }

      
    }


    public function consultarTodos(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> PlomeroDAO -> consultarTodos());
        echo $this -> PlomeroDAO -> consultarTodos();
        $plomeros = array();
        while(($registro = $this -> Conexion -> extraer()) != null){
            $Certificado= new Certificado($registro[5]);
            $Certificado -> consultar();
            echo $Certificado -> consultar();
            $plomero= new Plomero($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5]);
            array_push($plomeros, $plomero);
        }
        $this -> Conexion -> cerrar();
        return  $plomeros;
    }

    

    
}
?>