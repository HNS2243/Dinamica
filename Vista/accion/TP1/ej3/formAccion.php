<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej3/PersonaController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php");

// Obtenemos datos (POST o GET indistintamente)
$datos = darDatosSubmitted();

$controller = new PersonaController();
$mensaje = $controller->crearMensaje($datos);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p><?php echo $mensaje; ?></p>
    <a href="../../../estructura/TP1/ej3/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
