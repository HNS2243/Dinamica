<?php
class PersonaController {
    public function crearMensaje($datos) {
        $nombre = $datos['nombre'] ?? '';
        $apellido = $datos['apellido'] ?? '';
        $edad = $datos['edad'] ?? '';
        $direccion = $datos['direccion'] ?? '';

        return "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
    }
}
