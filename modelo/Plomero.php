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
    private $clienteDAO;
    
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


    public function Plomero($id=0, $nombre="", $apellido="", $correo="",$telefono="", $clave="", $id_admin="", $certificado="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> telefono = $telefono;
        $this -> clave = $clave;
        $this -> id_admin = $id_admin;
        $this -> certificado= $certificado;
        $this -> Conexion = new Conexion();
        $this -> PlomeroDAO = new PlomeroDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> telefono ->, $this -> clave, $this -> id_admin , $this->certificado );
    }
    
   
    
    
    public function autenticar(){
        $this -> Plomero -> abrir();
        $this -> Plomero -> ejecutar($this -> PlomeroDAO -> autenticar());
        if($this -> Plomero -> numFilas() == 0){
            return false;
        }else{
            $resultado = $this -> Plomero -> extraer();
            $this -> id = $resultado[0];
            return true;
        }
    }
    

    
}
?>