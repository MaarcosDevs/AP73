<?php
session_start();
$nombre = $_POST['nombre'];
$_SESSION['Usuario'] = $nombre;
$_SESSION['Sesion'] = true;
$color1 = $_POST['pag1'];
$color2 = $_POST['pag2'];
$_SESSION['Color1'] = $color1;
$_SESSION['Color2'] = $color2;
?>
<form action="" method="POST">
    <label>Ingresa tu numre: </label><input type="text" name="nombre"><br></br>
    <label>Elije el color de la pagina 1: </label><input type="text" name="pag1"><br></br>
    <label>Elije el color de la pagina 2: </label><input type="text" name="pag2"><br>
    <input type="submit">
</form>
<a href="pagina1.php">pagina1</a>
<a href="pagina2.php">pagina2</a>