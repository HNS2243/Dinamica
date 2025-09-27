<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej7/CalculadoraController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php");

// Obtenemos los datos
$datos = darDatosSubmitted();

$controller = new CalculadoraController();
$mensaje = $controller->procesarOperacion($datos);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p><?php echo $mensaje; ?></p>
    <a href="../../../estructura/TP1/ej7/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
