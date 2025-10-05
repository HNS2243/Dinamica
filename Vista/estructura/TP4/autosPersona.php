<?php
require_once __DIR__ . '/../configuracion.php';
$abm = new AbmPersona();
$abmAuto = new AbmAuto();
$dni = $_GET['dni'] ?? '';
$persona = $abm->buscar($dni);
$autos = $abmAuto->listarAutosDePersona($dni);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autos de Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <?php if($persona): ?>
        <h2>Autos de <?= $persona['Nombre'] ?> <?= $persona['Apellido'] ?></h2>
        <?php if(count($autos) > 0): ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr><th>Patente</th><th>Marca</th><th>Modelo</th></tr>
            </thead>
            <tbody>
            <?php foreach($autos as $a): ?>
                <tr>
                    <td><?= $a['Patente'] ?></td>
                    <td><?= $a['Marca'] ?></td>
                    <td><?= $a['Modelo'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="alert alert-warning">No tiene autos cargados.</div>
        <?php endif; ?>
    <?php else: ?>
        <div class="alert alert-danger">No se encontró persona con DNI <?= htmlspecialchars($dni) ?></div>
    <?php endif; ?>
    <a href="listaPersonas.php" class="btn btn-secondary">Regresar</a>
</div>
</body>
</html>
