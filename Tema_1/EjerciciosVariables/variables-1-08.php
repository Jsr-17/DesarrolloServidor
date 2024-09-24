<?php
/**
 * Variables. Sin formularios.(1) 13 - variables-1-08.php
 *
 * @author Escribe aquí tu nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tres círculos.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Círculos de color</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

<?php

$color1=rand(0,255);
$color2=rand(0,255);
$color3=rand(0,255);

$circulo=rand(50,150);
$circulo2=rand(50,150);
$circulo3=rand(50,150);

print('
<svg width="750" height="500" viewBox="0 0 1000 1000"  xmlns="http://www.w3.org/2000/svg">
<circle   cx="0" cy="200" r="'.$circulo.'" fill="rgb('.$color1 ." ".$color2 ." ".$color2.')"/>
<circle  cx="300" cy="200" r="'.$circulo2.'" fill="rgb('.$color2 ." ".$color1 ." ".$color3.')"/>
<circle  cx="600" cy="200" r="'.$circulo3.'" fill="rgb('.$color3 ." ".$color2 ." ".$color1.')"/>
</svg>.');

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
