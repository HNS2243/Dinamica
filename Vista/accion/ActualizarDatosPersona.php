<?php
require_once __DIR__ . '/../configuracion.php';
require_once __DIR__ . '/../util/funciones.php';

$datos = data_submitted();
require_once __DIR__ . '/../Control/AbmPersona.php';
$abmPersona = new AbmPersona();

if ($abmPersona->modificarPersona($datos)) {  // CORRECTO: usar modificarPersona()
    echo "<h3>Datos de la persona actualizados correctamente.</h3>";
} else {
    echo "<h3>Error al actualizar los datos.</h3>";
}

echo "<a href='../BuscarPersona.php' class='btn btn-secondary mt-2'>Volver</a>";
?>
