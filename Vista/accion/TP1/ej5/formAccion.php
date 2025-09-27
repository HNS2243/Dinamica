<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej5/EstudianteController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php");

// Unificamos datos con darDatosSubmitted()
$datos = darDatosSubmitted();

$controller = new EstudianteController();
$mensaje = $controller->procesarDatos($datos);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p><?php echo $mensaje; ?></p>
    <a href="../../../estructura/TP1/ej5/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
