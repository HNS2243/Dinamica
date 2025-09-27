<?php
require_once __DIR__ . '/../configuracion.php';
$abmPersona = new AbmPersona();
$personas = $abmPersona->listarPersonas(); // Para seleccionar dueño
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validarForm() {
            const campos = ['Patente','Marca','Modelo','DniDuenio'];
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
    <h2>Alta de Auto</h2>
    <form action="accion/accionNuevoAuto.php" method="post" onsubmit="return validarForm()">
        <div class="mb-3"><label>Patente:</label><input type="text" id="Patente" name="Patente" class="form-control"></div>
        <div class="mb-3"><label>Marca:</label><input type="text" id="Marca" name="Marca" class="form-control"></div>
        <div class="mb-3"><label>Modelo:</label><input type="number" id="Modelo" name="Modelo" class="form-control"></div>
        <div class="mb-3">
            <label>Dueño:</label>
            <select id="DniDuenio" name="DniDuenio" class="form-select">
                <option value="">Seleccione dueño</option>
                <?php foreach($personas as $p): ?>
                    <option value="<?= $p['NroDni'] ?>"><?= $p['Nombre'] ?> <?= $p['Apellido'] ?> (<?= $p['NroDni'] ?>)</option>
                <?php endforeach; ?>
            </select>
            <small>Si no encuentra al dueño, <a href="NuevaPersona.php">cargar nueva persona</a>.</small>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
    </form>
</div>
</body>
</html>
