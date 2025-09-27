<?php 
include_once(__DIR__ . "/../../../estructura/header.php");
require_once(__DIR__ . "/../../../../Control/TP1/ej2/HorasController.php");
require_once(__DIR__ . "/../../../../Modelo/funciones.php"); // incluimos las funciones

// Obtenemos los datos recibidos (pueden venir por GET o POST)
$datos = darDatosSubmitted();

// Validamos si existe la clave 'dias'
$dias = isset($datos['dias']) ? $datos['dias'] : [];

$controller = new HorasController();
$total = $controller->calcularTotal($dias);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p>La cantidad total de horas de cursada en la semana es: <strong><?php echo $total; ?></strong></p>
    <a href="../../../estructura/TP1/ej2/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
