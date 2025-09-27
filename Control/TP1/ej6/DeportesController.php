<?php
class DeportesController {
    public function procesarDatos($datos) {
        $nombre = $datos['nombre'] ?? '';
        $apellido = $datos['apellido'] ?? '';
        $edad = intval($datos['edad'] ?? 0);
        $direccion = $datos['direccion'] ?? '';
        $sexo = $datos['sexo'] ?? 'No especificado';
        $nivelEstudios = $this->traducirEstudios($datos['estudios'] ?? '');

        // Deportes seleccionados
        $deportes = $datos['deportes'] ?? [];
        $cantidadDeportes = count($deportes);
        $listaDeportes = ($cantidadDeportes > 0) ? implode(", ", $deportes) : "ninguno";

        // Mayoría de edad
        $mayoriaEdad = ($edad >= 18) ? "mayor de edad" : "menor de edad";

        return "Hola, soy $nombre $apellido, tengo $edad años ($mayoriaEdad), vivo en $direccion, mi nivel de estudios es: $nivelEstudios, mi sexo es: $sexo. 
        <br>Practico $cantidadDeportes deporte(s): $listaDeportes.";
    }

    private function traducirEstudios($valor) {
        switch ($valor) {
            case "1": return "No tiene estudios";
            case "2": return "Estudios primarios";
            case "3": return "Estudios secundarios";
            default: return "No especificado";
        }
    }
}
