<?php include_once(__DIR__ . "/../../header.php"); ?>
<div class="container mt-5">
    <h3>Ejercicio 1 - Ingresar un número</h3>
    <form method="post" action="../../../accion/TP1/ej1/formAccion.php">
        <div class="mb-3">
            <label for="numero" class="form-label">Ingrese un número:</label>
            <input type="number" class="form-control" name="numero" id="numero" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include_once(__DIR__ . "/../../footer.php"); ?>
