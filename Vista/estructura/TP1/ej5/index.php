<?php include_once(__DIR__ . "/../../header.php"); ?>

<div class="container mt-5">
    <h3>Ejercicio 5 - Datos Personales con Estudios y Sexo</h3>
    <form action="../../../accion/TP1/ej5/formAccion.php" method="post" class="p-3 border rounded bg-light shadow-sm">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nivel de estudios:</label><br>
            <input type="radio" name="estudios" value="1" required> No tiene estudios <br>
            <input type="radio" name="estudios" value="2"> Estudios primarios <br>
            <input type="radio" name="estudios" value="3"> Estudios secundarios
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo:</label>
            <select name="sexo" id="sexo" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include_once(__DIR__ . "/../../footer.php"); ?>
