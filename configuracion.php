<?php
session_start();
$_SESSION['ROOT'] = __DIR__ . "/";

spl_autoload_register(function ($class_name) {
    $dirs = [
        $_SESSION['ROOT'] . 'Modelo/',
        $_SESSION['ROOT'] . 'Modelo/conector/',
        $_SESSION['ROOT'] . 'Control/',
    ];
    foreach ($dirs as $dir) {
        $file = $dir . $class_name . '.php';
        if (file_exists($file)) {
            require_once($file);
            return;
        }
    }
});

// Funciones globales
include_once($_SESSION['ROOT'] . 'util/funciones.php');
?>
