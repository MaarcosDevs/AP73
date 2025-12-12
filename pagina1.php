<?php
session_start();
$color = $_SESSION['Color1'] ?? 'white';
$color_esc = htmlspecialchars($color, ENT_QUOTES, 'UTF-8');
if (isset($_SESSION['Usuario']) && $_SESSION['Sesion'] == true){
    echo "Bienvenido, " . $_SESSION['Usuario'];
} else {
    echo "Acceso Denegado";
}
if (isset($_SESSION['Color1']) && $_SESSION['Sesion'] == true)?>
    <style>body{background-color: <?= $color_esc ?>}</style>
    <br><a href="index.php">Inicio</a>
