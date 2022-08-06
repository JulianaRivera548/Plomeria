<?php
class ClienteDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $telefono;
    private $cedula;
    private $metodo_pago;
    
    public function __construct($id=0, $nombre="", $apellido="", $correo="", $clave="", $cedula="", $metodo_pago="",$telefono="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> telefono = $telefono;
        $this -> metodo_pago=$metodo_pago;
    }
    
    public function crear(){
        return "insert into cliente (Nombre, Apellido, Correo, Clave, Telefono, Cedula, Metodo_pago_idMetodo_pago)
                values (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "',
                '" . $this -> correo . "',
                '" . $this->clave. "',
                '" . $this -> telefono . "',
                '" . $this -> cedula . "',
                '" . $this -> metodo_pago . "'
                )";
    }
    
    
    public function Autenticar(){
        return "select idCliente
                from cliente where Correo = '" . $this -> correo . "' and Clave = '" . $this -> clave . "'";
        
    }
    
    
    public function Consultar(){
        return "select nombre, apellido, correo
                from administrador
                where idAdministrador = '" . $this -> id . "'";
    }
    
    public function existeCorreo(){
        return "select count(idCliente)
                from cliente
                where Correo = '" . $this -> correo . "'";
    }
    
    public function consultarUltimoId(){
        return "select last_insert_id()";
    }
    
    
  
}
?>