<?php
class EntradasController {
    public function calcularEntrada($datos) {
        $edad = intval($datos['edad'] ?? 0);
        $esEstudiante = isset($datos['estudiante']) && $datos['estudiante'] == "1";

        if ($esEstudiante && $edad < 12) {
            $precio = 160;
        } elseif ($esEstudiante && $edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }

        return "Edad: <strong>$edad</strong><br>
                Estudiante: <strong>" . ($esEstudiante ? "Sí" : "No") . "</strong><br>
                Precio de la entrada: <span class='fw-bold'>$ $precio</span>";
    }
}
