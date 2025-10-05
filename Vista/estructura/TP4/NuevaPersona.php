<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validarForm() {
            const campos = ['NroDni','Nombre','Apellido','fechaNac','Telefono','Domicilio'];
            for(let c of campos){
                if(document.getElementById(c).value.trim() === ''){
                    alert('Complete todos los campos');
                    return false;
                }
            }
            return true;
        }
    </script>
</head>
<body class="p-4">
<div class="container">
    <h2>Alta de Persona</h2>
    <form action="accion/accionNuevaPersona.php" method="post" onsubmit="return validarForm()">
        <div class="mb-3"><label>DNI:</label><input type="text" id="NroDni" name="NroDni" class="form-control"></div>
        <div class="mb-3"><label>Nombre:</label><input type="text" id="Nombre" name="Nombre" class="form-control"></div>
        <div class="mb-3"><label>Apellido:</label><input type="text" id="Apellido" name="Apellido" class="form-control"></div>
        <div class="mb-3"><label>Fecha de Nacimiento:</label><input type="date" id="fechaNac" name="fechaNac" class="form-control"></div>
        <div class="mb-3"><label>Teléfono:</label><input type="text" id="Telefono" name="Telefono" class="form-control"></div>
        <div class="mb-3"><label>Domicilio:</label><input type="text" id="Domicilio" name="Domicilio" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
    </form>
</div>
</body>
</html>
