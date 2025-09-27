<?php include_once "header.php"; ?>

<div class="row">
    <!-- Columna izquierda: Grupo -->
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <i class="bi bi-people"></i> GRUPO
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Joaquín</li>
                <li class="list-group-item">Nicolás</li>
                <li class="list-group-item">Lautaro</li>
                <li class="list-group-item">Emmanuel</li>
            </ul>
            <div class="card-footer text-center text-muted">
                4 integrantes
            </div>
        </div>
    </div>

    <!-- Columna central: Trabajos -->
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm mb-3">
            <div class="card-header bg-light">
                <i class="bi bi-journal-text"></i> Trabajos
            </div>
            <div class="list-group list-group-flush">

                <!-- TP1 -->
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>TP1</strong> <br>
                            HTML - PHP
                            <span class="badge bg-success ms-2">Entregado</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary">8.5</span>
                            <a class="btn btn-link btn-sm" data-bs-toggle="collapse" href="#tp1Detalles" role="button" aria-expanded="false" aria-controls="tp1Detalles">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3" id="tp1Detalles">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-primary text-white">Trabajo Práctico 1</div>
                                    <div class="card-body text-center">
                                        <a href="/PWD-ReMaster/Vista/estructura/TP1/Menu/index.php" class="btn btn-primary w-100">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP2 -->
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>TP2</strong> <br>
                            Validación de formularios
                            <span class="badge bg-success ms-2">Entregado</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary">9.0</span>
                            <a class="btn btn-link btn-sm" data-bs-toggle="collapse" href="#tp2Detalles" role="button" aria-expanded="false" aria-controls="tp2Detalles">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3" id="tp2Detalles">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-success text-white">Trabajo Práctico 2</div>
                                    <div class="card-body text-center">
                                        <a href="/PWD-ReMaster/Vista/estructura/TP2/Menu/index.php" class="btn btn-success w-100">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP3 -->
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>TP3</strong> <br>
                            Subir archivos
                            <span class="badge bg-warning text-dark ms-2">En progreso</span>
                        </div>
                        <div>
                            <a class="btn btn-link btn-sm" data-bs-toggle="collapse" href="#tp3Detalles" role="button" aria-expanded="false" aria-controls="tp3Detalles">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3" id="tp3Detalles">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-danger text-white">Trabajo Práctico 3</div>
                                    <div class="card-body text-center">
                                        <a href="/PWD-ReMaster/Vista/estructura/TP3/Menu/index.php" class="btn btn-danger w-100">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP4 -->
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>TP4</strong> <br>
                            PHP - MYSQL
                            <span class="badge bg-light text-dark ms-2">Pendiente</span>
                        </div>
                        <div>
                            <a class="btn btn-link btn-sm" data-bs-toggle="collapse" href="#tp4Detalles" role="button" aria-expanded="false" aria-controls="tp4Detalles">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3" id="tp4Detalles">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-secondary text-white">Trabajo Práctico 4</div>
                                    <div class="card-body text-center">
                                        <a href="#" class="btn btn-secondary w-100">Pendiente</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Columna derecha: Links -->
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <i class="bi bi-link-45deg"></i> Links
            </div>
            <div class="list-group list-group-flush">
                <a href="https://docs.google.com/spreadsheets/d/1cvUbjH5e4g3TbaTU0c5r_KzwzFYDHkl7pumdLSlhQtA/edit?gid=0#gid=0" class="list-group-item list-group-item-action">📄 Planilla</a>
                <a href="https://drive.google.com/drive/folders/1hJ7qj3djMWJYpN7vP2VQ7H6Wfw_olKPD?hl=es_419" class="list-group-item list-group-item-action">🎥 Videos correcciones</a>
                <a href="https://pedco.uncoma.edu.ar/course/view.php?id=285" class="list-group-item list-group-item-action">📚 Material de Estudio</a>
                <a href="https://docs.google.com/document/d/1oor0wLN-omB4yNrm5_dcfsilsLKlGhl65U0uX1wKm-o/edit?tab=t.0" class="list-group-item list-group-item-action">🗓️ Cronograma</a>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-dark w-100">Descargar todos los recursos</a>
            </div>
        </div>
    </div>
</div>

<!-- Resumen de Progreso -->
<div class="row text-center mt-4">
    <div class="col-md-3">
        <div class="p-3 bg-success text-white rounded shadow-sm">
            2 Trabajos Entregados
        </div>
    </div>
    <div class="col-md-3">
        <div class="p-3 bg-warning text-dark rounded shadow-sm">
            1 En Progreso
        </div>
    </div>
    <div class="col-md-3">
        <div class="p-3 bg-light border rounded shadow-sm">
            1 Pendiente
        </div>
    </div>
    <div class="col-md-3">
        <div class="p-3 bg-info text-white rounded shadow-sm">
            8.75 Promedio
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>