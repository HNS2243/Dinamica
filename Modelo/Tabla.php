<?php
class Tabla {
    protected $bd;

    public function __construct(){
        $this->bd = new BaseDatos();
    }
}
?>
