<?php
class HorasController {
    public function calcularTotal($arrayHoras) {
        // Asegura que sea un array válido
        if (!is_array($arrayHoras)) {
            return 0;
        }
        // Convierte los valores a enteros y suma
        $arrayHoras = array_map('intval', $arrayHoras);
        return array_sum($arrayHoras);
    }
}
