<?php
class CalculadoraController {
    public function procesarOperacion($datos) {
        $num1 = floatval($datos['numero1'] ?? 0);
        $num2 = floatval($datos['numero2'] ?? 0);
        $operacion = $datos['operacion'] ?? '';

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                $textoOperacion = "Suma";
                $simbolo = "+";
                break;

            case "resta":
                $resultado = $num1 - $num2;
                $textoOperacion = "Resta";
                $simbolo = "-";
                break;

            case "multiplicacion":
                $resultado = $num1 * $num2;
                $textoOperacion = "Multiplicación";
                $simbolo = "×";
                break;

            case "division":
                if ($num2 == 0) {
                    return "Error: No se puede dividir por cero.";
                }
                $resultado = $num1 / $num2;
                $textoOperacion = "División";
                $simbolo = "÷";
                break;

            default:
                return "Operación no válida.";
        }

        return "Operación seleccionada: <strong>$textoOperacion</strong><br>
                Operando 1: $num1<br>
                Operando 2: $num2<br>
                Resultado: $num1 $simbolo $num2 = <strong>$resultado</strong>";
    }
}
