<?php
require_once __DIR__ . '/../../configuracion.php';
require_once __DIR__ . '/../../util/funciones.php';
require_once __DIR__ . '/../../Control/AbmAuto.php';

$datos = data_submitted();
$patente = trim($datos['Patente']);

$abmAuto = new AbmAuto();
$auto = $abmAuto->buscarAuto($patente);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Resultado de la Búsqueda</h2>

    <?php if ($auto): ?>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>DNI del Dueño</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($auto->getPatente()) ?></td>
                    <td><?= htmlspecialchars($auto->getMarca()) ?></td>
                    <td><?= htmlspecialchars($auto->getModelo()) ?></td>
                    <td><?= htmlspecialchars($auto->getDniDuenio()) ?></td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">
            No se encontró ningún auto con la patente <strong><?= htmlspecialchars($patente) ?></strong>.
        </div>
    <?php endif; ?>

    <a href="../BuscarAuto.php" class="btn btn-secondary">Volver</a>
</div>
</body>
</html>
