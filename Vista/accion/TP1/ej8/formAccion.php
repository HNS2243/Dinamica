<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej8/EntradasController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php");

// Obtenemos datos usando darDatosSubmitted
$datos = darDatosSubmitted();

$controller = new EntradasController();
$mensaje = $controller->calcularEntrada($datos);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p><?php echo $mensaje; ?></p>
    <a href="../../../estructura/TP1/ej8/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
