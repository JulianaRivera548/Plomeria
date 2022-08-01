<?php
require_once "Conexion.php";
require_once "ClienteDAO.php";
class cliente{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $estado;
    private $codigo_activacion;
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
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }
    
    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    /**
     * @return mixed
     */
    public function getCodigo_activacion()
    {
        return $this->codigo_activacion;
    }
    
    public function Cliente($id=0, $nombre="", $apellido="", $correo="", $clave="", $estado="", $codigo_activacion="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> estado = $estado;
        $this -> codigo_activacion = $codigo_activacion;
        $this -> Conexion = new Conexion();
        $this -> ClienteDAO = new ClienteDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave, $this -> estado, $this -> codigo_activacion);
    }
    
   
    
    
    public function autenticar(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> ClienteDAO -> autenticar());
        if($this -> Conexion -> numFilas() == 0){
            return false;
        }else{
            $resultado = $this -> Conexion -> extraer();
            $this -> id = $resultado[0];
            return true;
        }
    }
    

    
}
?>