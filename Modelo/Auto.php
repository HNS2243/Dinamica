<?php
require_once __DIR__ . '/Tabla.php';
require_once __DIR__ . '/conector/BaseDatos.php';

class Auto extends Tabla {
    private $Patente;
    private $Marca;
    private $Modelo;
    private $DniDuenio;

    // Getters y Setters
    public function getPatente() { return $this->Patente; }
    public function setPatente($p) { $this->Patente = $p; }

    public function getMarca() { return $this->Marca; }
    public function setMarca($m) { $this->Marca = $m; }

    public function getModelo() { return $this->Modelo; }
    public function setModelo($mo) { $this->Modelo = $mo; }

    public function getDniDuenio() { return $this->DniDuenio; }
    public function setDniDuenio($dni) { $this->DniDuenio = $dni; }

    // Insertar Auto
    public function insertar() {
        $bd = new BaseDatos();
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio)
                VALUES ('{$this->Patente}', '{$this->Marca}', {$this->Modelo}, '{$this->DniDuenio}')";
        return $bd->Ejecutar($sql);
    }

    // Buscar Auto por Patente
    public function buscar($patente){
        $bd = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = '$patente'";
        $cant = $bd->Ejecutar($sql);
        if($cant > 0){
            $fila = $bd->Registro();
            $this->Patente = $fila['Patente'];
            $this->Marca = $fila['Marca'];
            $this->Modelo = $fila['Modelo'];
            $this->DniDuenio = $fila['DniDuenio'];
            return $fila;
        }
        return false;
    }

    // Modificar Auto
    public function modificar() {
        $bd = new BaseDatos();
        $sql = "UPDATE auto SET Marca='{$this->Marca}', Modelo={$this->Modelo}, DniDuenio='{$this->DniDuenio}'
                WHERE Patente='{$this->Patente}'";
        return $bd->Ejecutar($sql);
    }

    // Eliminar Auto
    public function eliminar() {
        $bd = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente='{$this->Patente}'";
        return $bd->Ejecutar($sql);
    }

    // Listar todos los autos
    public function listar() {
        $bd = new BaseDatos();
        $sql = "SELECT * FROM auto";
        $cant = $bd->Ejecutar($sql);
        $result = [];
        if($cant > 0){
            while($fila = $bd->Registro()){
                $result[] = $fila;
            }
        }
        return $result;
    }

    // Listar autos de una persona
    public function listarPorDuenio($dni){
        $bd = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE DniDuenio = '$dni'";
        $cant = $bd->Ejecutar($sql);
        $result = [];
        if($cant > 0){
            while($fila = $bd->Registro()){
                $result[] = $fila;
            }
        }
        return $result;
    }
}
