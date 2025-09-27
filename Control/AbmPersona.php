<?php
require_once __DIR__ . '/../Modelo/Persona.php';
require_once __DIR__ . '/../Modelo/conector/BaseDatos.php';

class AbmPersona {

    public function altaPersona($datos) {
        $persona = new Persona();
        $persona->setNroDni($datos['NroDni']);
        $persona->setNombre($datos['Nombre']);
        $persona->setApellido($datos['Apellido']);
        $persona->setFechaNac($datos['fechaNac']);
        $persona->setTelefono($datos['Telefono']);
        $persona->setDomicilio($datos['Domicilio']);

        $db = new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Nombre, Apellido, fechaNac, Telefono, Domicilio)
                VALUES ('".$persona->getNroDni()."',
                        '".$persona->getNombre()."',
                        '".$persona->getApellido()."',
                        '".$persona->getFechaNac()."',
                        '".$persona->getTelefono()."',
                        '".$persona->getDomicilio()."')";
        $res = $db->Ejecutar($sql);
        return ($res > 0);
    }

    public function modificarPersona($datos) {
        $persona = new Persona();
        $persona->setNroDni($datos['NroDni']);
        $persona->setNombre($datos['Nombre']);
        $persona->setApellido($datos['Apellido']);
        $persona->setFechaNac($datos['fechaNac']);
        $persona->setTelefono($datos['Telefono']);
        $persona->setDomicilio($datos['Domicilio']);

        $db = new BaseDatos();
        $sql = "UPDATE persona 
                SET Nombre='".$persona->getNombre()."',
                    Apellido='".$persona->getApellido()."',
                    fechaNac='".$persona->getFechaNac()."',
                    Telefono='".$persona->getTelefono()."',
                    Domicilio='".$persona->getDomicilio()."'
                WHERE NroDni='".$persona->getNroDni()."'";
        $res = $db->Ejecutar($sql);
        return ($res > 0);
    }

    public function buscarPersona($dni) {
        $db = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni='".$dni."'";
        $cant = $db->Ejecutar($sql);
        if ($cant > 0) {
            $reg = $db->Registro();
            $persona = new Persona();
            $persona->setNroDni($reg['NroDni']);
            $persona->setNombre($reg['Nombre']);
            $persona->setApellido($reg['Apellido']);
            $persona->setFechaNac($reg['fechaNac']);
            $persona->setTelefono($reg['Telefono']);
            $persona->setDomicilio($reg['Domicilio']);
            return $persona;
        }
        return null;
    }

    public function listarPersonas() {
        $db = new BaseDatos();
        $sql = "SELECT * FROM persona";
        $cant = $db->Ejecutar($sql);
        $personas = [];
        if ($cant > 0) {
            while ($reg = $db->Registro()) {
                $p = new Persona();
                $p->setNroDni($reg['NroDni']);
                $p->setNombre($reg['Nombre']);
                $p->setApellido($reg['Apellido']);
                $p->setFechaNac($reg['fechaNac']);
                $p->setTelefono($reg['Telefono']);
                $p->setDomicilio($reg['Domicilio']);
                $personas[] = $p;
            }
        }
        return $personas;
    }
    
}
