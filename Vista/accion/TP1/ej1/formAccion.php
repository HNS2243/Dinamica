<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej1/NumeroController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php"); // incluimos la función

// Obtenemos los datos enviados (pueden ser GET o POST)
$datos = darDatosSubmitted();
$numero = isset($datos['numero']) ? (int)$datos['numero'] : null;

$controller = new NumeroController();
$resultado = $controller->analizarNumero($numero);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p>El número ingresado <strong><?php echo $numero; ?></strong> es: 
       <span class="fw-bold"><?php echo $resultado; ?></span>
    </p>
    <a href="../../../estructura/TP1/ej1/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
