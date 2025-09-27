<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú Principal - Proyecto PDO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Sistema de Autos y Personas</h1>
    
    <div class="row">
        <!-- Autos -->
        <div class="col-md-6">
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-primary text-white">Autos</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="Vista/VerAutos.php" class="text-decoration-none">Ver todos los autos</a></li>
                        <li class="list-group-item"><a href="Vista/buscarAuto.php" class="text-decoration-none">Buscar auto por patente</a></li>
                        <li class="list-group-item"><a href="Vista/NuevoAuto.php" class="text-decoration-none">Agregar nuevo auto</a></li>
                        <li class="list-group-item"><a href="Vista/CambioDuenio.php" class="text-decoration-none">Cambiar dueño de auto</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Personas -->
        <div class="col-md-6">
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-success text-white">Personas</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="Vista/listaPersonas.php" class="text-decoration-none">Listado de personas</a></li>
                        <li class="list-group-item"><a href="Vista/BuscarPersona.php" class="text-decoration-none">Buscar y editar persona</a></li>
                        <li class="list-group-item"><a href="Vista/NuevaPersona.php" class="text-decoration-none">Agregar nueva persona</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>
