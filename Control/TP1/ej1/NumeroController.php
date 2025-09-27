<?php
class NumeroController {
    public function analizarNumero($numero) {
        if ($numero > 0) {
            return "Positivo";
        } elseif ($numero < 0) {
            return "Negativo";
        } else {
            return "Cero";
        }
    }
}
