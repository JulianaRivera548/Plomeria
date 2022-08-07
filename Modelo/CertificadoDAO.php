<?php
class CertificadoDAO{

private $id;
private $especiallidad;
private $nivel;
private $institucion;

  
public function __construct($id="", $especiallidad="",$nivel="",  $institucion){
    $this -> id = $id;
    $this -> especialidad = $especiallidad;
    $this -> nivel = $nivel;
    $this -> institucion = $institucion;
}

public function consultarTodos(){
    return "select idCertificado, Especialidad, Nivel, Institucion
            from certificado
            order by nombre asc";
}


public function consultar(){
    return "select Especialidad
            from certificado
            where idCertificado = " . $this -> id;        
}  


}