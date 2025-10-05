<?php
require_once __DIR__ . '/../../../configuracion.php';
require_once __DIR__ . '/../../../util/funciones.php';
require_once __DIR__ . '/../../../Control/AbmPersona.php';

$abmPersona = new AbmPersona();
$personas = $abmPersona->listarPersonas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Listado de Personas</h2>

    <?php if ($personas && count($personas) > 0): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>DNI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th>Autos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personas as $persona): ?>
                    <tr>
                        <td><?= htmlspecialchars($persona->getNroDni()) ?></td>
                        <td><?= htmlspecialchars($persona->getApellido()) ?></td>
                        <td><?= htmlspecialchars($persona->getNombre()) ?></td>
                        <td><?= htmlspecialchars($persona->getFechaNac()) ?></td>
                        <td><?= htmlspecialchars($persona->getTelefono()) ?></td>
                        <td><?= htmlspecialchars($persona->getDomicilio()) ?></td>
                        <td>
                            <a href="VerAutos.php" class="btn btn-sm btn-primary">
                                Ver Autos
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">
            No hay personas cargadas en la base de datos.
        </div>
    <?php endif; ?>

    <a href="/../index.php" class="btn btn-secondary">Volver</a>
</div>
</body>
</html>
