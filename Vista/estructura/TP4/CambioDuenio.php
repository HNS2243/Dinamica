<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Dueño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validarForm() {
            if(document.getElementById('Patente').value.trim() === '' ||
               document.getElementById('NroDni').value.trim() === ''){
                alert('Complete ambos campos');
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="p-4">
<div class="container">
    <h2>Cambiar Dueño de Auto</h2>
    <form action="accion/accionCambioDuenio.php" method="post" onsubmit="return validarForm()">
        <div class="mb-3"><label>Patente:</label><input type="text" id="Patente" name="Patente" class="form-control"></div>
        <div class="mb-3"><label>DNI del nuevo dueño:</label><input type="text" id="NroDni" name="NroDni" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Cambiar</button>
        <a href="../index.php" class="btn btn-secondary">Regresar</a>
    </form>
</div>
</body>
</html>
