<?php
session_start();
if (isset($_SESSION['Usuario']) && $_SESSION['Sesion'] == true){
    echo "Bienvenido, " . $_SESSION['Usuario'];
} else {
    echo "Acceso Denegado";
}
if (isset($_SESSION['Color2']) && $_SESSION['Sesion'] == true)?>
    <style>body{background-color: blue;}</style>
    <br><a href="index.php">Inicio</a>
    <br><a href="destroy.php">Destruir Sesion</a>