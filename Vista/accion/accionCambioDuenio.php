<?php
require_once __DIR__ . '/../configuracion.php';
require_once __DIR__ . '/../util/funciones.php';

$datos = data_submitted();
require_once __DIR__ . '/../Control/AbmAuto.php';
require_once __DIR__ . '/../Control/AbmPersona.php';

$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();

$auto = $abmAuto->buscarAuto($datos['Patente']);
$persona = $abmPersona->buscarPersona($datos['DniDuenio']);

if (!$auto) {
    echo "<h3>No se encontró el auto con esa patente.</h3>";
    exit;
}

if (!$persona) {
    echo "<h3>No se encontró la persona con ese DNI.</h3>";
    exit;
}

// Cambiar dueño
$auto->setDniDuenio($persona->getNroDni());
if ($abmAuto->modificarAuto([
    'Patente' => $auto->getPatente(),
    'Marca' => $auto->getMarca(),
    'Modelo' => $auto->getModelo(),
    'DniDuenio' => $auto->getDniDuenio()
])) {
    echo "<h3>Dueño actualizado correctamente.</h3>";
} else {
    echo "<h3>Error al actualizar el dueño.</h3>";
}

echo "<a href='../CambioDuenio.php' class='btn btn-secondary mt-2'>Volver</a>";
?>
