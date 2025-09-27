<?php
require_once __DIR__ . '/Tabla.php';

class Persona extends Tabla {
    private $NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio;

    public function __construct(){
        parent::__construct();
    }

    // Getters y Setters
    public function getNroDni(){ return $this->NroDni; }
    public function setNroDni($v){ $this->NroDni = $v; }

    public function getApellido(){ return $this->Apellido; }
    public function setApellido($v){ $this->Apellido = $v; }

    public function getNombre(){ return $this->Nombre; }
    public function setNombre($v){ $this->Nombre = $v; }

    public function getFechaNac(){ return $this->fechaNac; }
    public function setFechaNac($v){ $this->fechaNac = $v; }

    public function getTelefono(){ return $this->Telefono; }
    public function setTelefono($v){ $this->Telefono = $v; }

    public function getDomicilio(){ return $this->Domicilio; }
    public function setDomicilio($v){ $this->Domicilio = $v; }
}
?>
