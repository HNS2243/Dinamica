<?php include_once(__DIR__ . "../../../header.php"); ?>

<div class="container mt-4">
    <!-- Menú -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Menú de Trabajo Práctico 2</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center">Selecciona un ejercicio para ingresar:</p>

                    <div class="list-group">
                        <a href="../../ej1/index.php" class="list-group-item list-group-item-action">
                            Ejercicio 1
                        </a>
                        <a href="../../ej2/index.php" class="list-group-item list-group-item-action">
                            Ejercicio 2
                        </a>
                        <a href="../../ej3/index.php" class="list-group-item list-group-item-action active">
                            Ejercicio 3
                        </a>
                        <a href="../../ej4/index.php" class="list-group-item list-group-item-action">
                            Ejercicio 4
                        </a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="../../index.php" class="btn btn-secondary">⬅ Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario -->
    <div class="container mt-5">
        <h3>Ejercicio 3 - Datos Personales (Validación Bootstrap)</h3>

        <form id="formPersona" action="../../../../accion/TP1/ej3/formAccion.php" method="post"
              class="p-3 border rounded bg-light shadow-sm needs-validation" novalidate>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
                <div class="invalid-feedback">
                    Por favor ingrese su nombre.
                </div>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
                <div class="invalid-feedback">
                    Por favor ingrese su apellido.
                </div>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required min="1">
                <div class="invalid-feedback">
                    Por favor ingrese una edad válida.
                </div>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
                <div class="invalid-feedback">
                    Por favor ingrese su dirección.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<!-- Validación Bootstrap -->
<script src="../../../../js/tp2/ej2/validacion.js"></script>

<?php include_once(__DIR__ . "/../../footer.php"); ?>
