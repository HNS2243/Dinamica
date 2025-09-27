<?php
require_once __DIR__ . '/../../configuracion.php';
require_once __DIR__ . '/../../util/funciones.php';

$datos = data_submitted();

require_once __DIR__ . '/../../Control/AbmPersona.php';
$abmPersona = new AbmPersona();

if ($abmPersona->altaPersona($datos)) {  // CORRECTO: usar altaPersona()
    echo "<h3>Persona cargada correctamente.</h3>";
} else {
    echo "<h3>Error al cargar la persona.</h3>";
}

echo "<a href='../NuevaPersona.php' class='btn btn-secondary mt-2'>Volver</a>";
?>
