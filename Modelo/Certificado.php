<?php
require_once "Conexion.php";
require_once "CertificadoDAO.php";
class Certificado{

private $id;
private $especialidad;
private $nivel;
private $institucion;


public function getId()
{
    return $this->id;
}

public function getEspecialidad()
{
    return $this->especiaidad;
}

public function getNivel()
{
    return $this->nivel;
}

public function getInstitucion()
{
    return $this->institucion;
}


public function __construct($id=0, $especialidad="", $nivel="", $institucion=""){
        $this-> id = $id;
        $this -> especialidad = $especialidad;
        $this -> nivel = $nivel;
        $this -> institucion = $institucion;
       $this -> Conexion = new Conexion ();
        $this -> CertificadoDAO = new CertificadoDAO($this -> id, $this -> especialidad, $this -> nivel, $this -> institucion);
}

public function consultarTodos(){
    $this -> conexion -> abrir();
    $this -> conexion -> ejecutar($this -> CertificadoDAO -> consultarTodos());
    $certificados = array();
    while(($certificados = $this -> conexion -> extraer()) != null){
        array_push($certificados, new Certificado($resultado[0], $resultado[1],$resultado[2],$resultado[3]));            
    }
    $this -> conexion -> cerrar();
    return $certificados;
}


 
public function consultar(){
    $this -> Conexion -> abrir();
    $this -> Conexion -> ejecutar($this -> CertificadoDAO -> consultar());
    $resultado = $this -> Conexion -> extraer();
    $this -> especialidad = $resultado[0]; 
    $this -> Conexion -> cerrar();
}


}