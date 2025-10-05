<?php
require_once __DIR__ . "/../../../configuracion.php";
$abm = new AbmTabla();
$autos = $abm->listarAutosConDueno();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Autos Cargados</h2>
        <?php if(count($autos) > 0): ?>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Nombre Dueño</th>
                        <th>Apellido Dueño</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($autos as $auto): ?>
                        <tr>
                            <td><?= $auto['Patente'] ?></td>
                            <td><?= $auto['Marca'] ?></td>
                            <td><?= $auto['Modelo'] ?></td>
                            <td><?= $auto['Nombre'] ?></td>
                            <td><?= $auto['Apellido'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning">No hay autos cargados.</div>
        <?php endif; ?>
        <a href="../TP4/Menu/index.php" class="btn btn-secondary mt-3">Regresar</a>
    </div>
</body>
</html>
