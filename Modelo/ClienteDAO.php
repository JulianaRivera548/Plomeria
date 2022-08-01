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
    
    public function clienteDAO($id=0, $nombre="", $apellido="", $correo="", $clave="", $telefono="", $cedula="", $metodo_pago="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> telefono = $telefono;
        $this -> metodo_pago=$metodo_pago;
    }
    
    public function crear(){
        return "insert into cliente (nombre, apellido, correo, clave, codigo_activacion)
                values (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "',
                '" . $this -> correo . "',
                '" . md5($this -> clave) . "',
                '" . $this -> codigo_activacion . "'
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
    
    
  
}
?>