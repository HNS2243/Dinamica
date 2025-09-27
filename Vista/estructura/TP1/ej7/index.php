<?php include_once(__DIR__ . "/../../header.php"); ?>

<div class="container mt-5">
    <h3>Ejercicio 7 - Calculadora</h3>
    <form action="../../../accion/TP1/ej7/formAccion.php" method="post" class="p-3 border rounded bg-light shadow-sm">

        <div class="mb-3">
            <label for="numero1" class="form-label">Número 1:</label>
            <input type="number" name="numero1" id="numero1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="numero2" class="form-label">Número 2:</label>
            <input type="number" name="numero2" id="numero2" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="operacion" class="form-label">Operación:</label>
            <select name="operacion" id="operacion" class="form-select" required>
                <option value="">Seleccione una operación</option>
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="multiplicacion">Multiplicación (×)</option>
                <option value="division">División (÷)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>

<?php include_once(__DIR__ . "/../../footer.php"); ?>
