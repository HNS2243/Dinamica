<?php
require_once __DIR__ . '/../Modelo/Auto.php';
require_once __DIR__ . '/../Modelo/Persona.php';

class AbmTabla {

    public function listarAutosConDueno(){
        $bd = new BaseDatos();
        $sql = "SELECT a.Patente, a.Marca, a.Modelo, p.Nombre, p.Apellido 
                FROM auto a
                INNER JOIN persona p ON a.DniDuenio = p.NroDni";
        $bd->Ejecutar($sql);

        $autos = [];
        while($fila = $bd->Registro()){
            $autos[] = $fila;
        }
        return $autos;
    }
}
?>
