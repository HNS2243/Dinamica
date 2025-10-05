<?php
require_once __DIR__ . '/../../../configuracion.php';
require_once __DIR__ . '/../../../util/funciones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Buscar Auto por Patente</h2>
    <form action="accion/accionBuscarAuto.php" method="post" class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="Patente" class="form-label">Patente</label>
            <input type="text" class="form-control" name="Patente" id="Patente" required>
            <div class="invalid-feedback">
                Por favor, ingrese la patente del auto.
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="../index.php" class="btn btn-secondary">Volver</a>
        </div>
    </form>
</div>

<script>
// Validación de Bootstrap
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})();
</script>

</body>
</html>
