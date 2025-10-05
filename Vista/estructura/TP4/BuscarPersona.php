<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validarForm() {
            if(document.getElementById('NroDni').value.trim() === ''){
                alert('Ingrese un número de documento');
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="p-4">
<div class="container">
    <h2>Buscar Persona</h2>
    <form action="accion/accionBuscarPersona.php" method="get" onsubmit="return validarForm()">
        <div class="mb-3"><label>DNI:</label><input type="text" id="NroDni" name="NroDni" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="../TP4/Menu/index.php" class="btn btn-secondary">Regresar</a>
    </form>
</div>
</body>
</html>
