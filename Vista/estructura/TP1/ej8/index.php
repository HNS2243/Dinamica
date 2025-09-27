<?php include_once(__DIR__ . "/../../header.php"); ?>

<div class="container mt-5">
    <h3>Ejercicio 8 - Entradas de Cine</h3>
    <form action="../../../accion/TP1/ej8/formAccion.php" method="post" class="p-3 border rounded bg-light shadow-sm">

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">¿Es estudiante?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudiante" id="estudiante_si" value="1" required>
                <label class="form-check-label" for="estudiante_si">Sí</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudiante" id="estudiante_no" value="0" required>
                <label class="form-check-label" for="estudiante_no">No</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </form>
</div>

<?php include_once(__DIR__ . "/../../footer.php"); ?>
