<?php include_once(__DIR__ . "/../../header.php"); ?>
<div class="container mt-5">
    <h3>Ejercicio 2 - Horas de cursada por semana</h3>
    <form method="get" action="../../../accion/TP1/ej2/formAccion.php">
        <div class="mb-3">
            <label for="lunes" class="form-label">Lunes:</label>
            <input type="number" class="form-control" name="dias[]" id="lunes" min="0" required>
        </div>
        <div class="mb-3">
            <label for="martes" class="form-label">Martes:</label>
            <input type="number" class="form-control" name="dias[]" id="martes" min="0" required>
        </div>
        <div class="mb-3">
            <label for="miercoles" class="form-label">Miércoles:</label>
            <input type="number" class="form-control" name="dias[]" id="miercoles" min="0" required>
        </div>
        <div class="mb-3">
            <label for="jueves" class="form-label">Jueves:</label>
            <input type="number" class="form-control" name="dias[]" id="jueves" min="0" required>
        </div>
        <div class="mb-3">
            <label for="viernes" class="form-label">Viernes:</label>
            <input type="number" class="form-control" name="dias[]" id="viernes" min="0" required>
        </div>
        <div class="mb-3">
            <label for="sabado" class="form-label">Sábado:</label>
            <input type="number" class="form-control" name="dias[]" id="sabado" min="0" required>
        </div>
        <div class="mb-3">
            <label for="domingo" class="form-label">Domingo:</label>
            <input type="number" class="form-control" name="dias[]" id="domingo" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular total</button>
    </form>
</div>
<?php include_once(__DIR__ . "/../../footer.php"); ?>
