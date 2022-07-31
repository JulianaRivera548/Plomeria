<?php
class clienteDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $telefono;
    private $metodo_pago;
    
    public function clienteDAO($id=0, $nombre="", $apellido="", $correo="", $clave="", $telefono="", $metodo_pago="") {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> estado = $estado;
        $this -> codigo_activacion = $codigo_activacion;
    }
    
    public function crear(){
        return "insert into cliente (nombre, apellido, correo, clave, codigo_activacion)
                values (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "',
                '" . $this -> correo . "',
                '" . $this -> clave . "',
                '" . $this -> codigo_activacion . "'
                )";
    }

    public function autenticar(){
        return "select idCliente, estado
                from cliente
                where correo = '" . $this -> correo . "' and clave = '" . md5($this -> clave) . "'";
    }
    
   
    
    public function Consultar(){
        return "select nombre, apellido, correo
                from administrador
                where idAdministrador = '" . $this -> id . "'";
    }
    
    
   
}
?>