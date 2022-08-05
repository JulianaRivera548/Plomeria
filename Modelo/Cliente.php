<?php
require_once "Conexion.php";
require_once "ClienteDAO.php";
class Cliente{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $cedula;
    private $telefono;
    private $metodo_pago;
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
    public function getCedula()
    {
        return $this->estado;
    }
    
    public function getMetodo_pago(){
        return $this->metodo_pago;
    }
    
    public function getTelefono(){
        return $this ->telefono;
    }
    
    
    
    public function __construct($id=0, $nombre="", $apellido="", $correo="", $clave="", $cedula="", $metodo_pago="", $telefono="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
           $this->cedula =$cedula;
           $this->metodo_pago = $metodo_pago;
           $this->telefono =$telefono;
        $this -> Conexion = new Conexion();
        $this -> ClienteDAO = new ClienteDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave, $this -> cedula, $this -> metodo_pago,$this->telefono);
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
    
    public function existeCorreo(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> ClienteDAO -> existeCorreo());
        $resultado = $this -> Conexion -> extraer();
        $this -> Conexion -> cerrar();
        return ($resultado[0]==0)?false:true;
    }
    
    
    public function crear(){
        $this -> Conexion -> abrir();
        $this -> Conexion -> ejecutar($this -> ClienteDAO -> crear());
        $this -> Conexion -> ejecutar($this -> ClienteDAO -> consultarUltimoId());
        $resultado = $this -> Conexion -> extraer();
        $this -> Conexion -> cerrar();
        return $resultado[0];
    }
    
}
?>