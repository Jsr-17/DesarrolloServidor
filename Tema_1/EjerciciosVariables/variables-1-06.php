<?php
/**
 * Variables. Sin formularios.(1) 11 - variables-1-06.php
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
    Cuatro círculos.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Cuatro círculos</h1>

<?php

$color1=rand(0,255);
$color2=rand(0,255);
$color3=rand(0,255);


$radio=rand(50,150);



print(
  '<svg width="750" height="500" viewBox="0 0 1000 1000"  xmlns="http://www.w3.org/2000/svg">
  <circle   cx="0" cy="50%" r="'.$radio.'" fill="rgb('.$color1 ." ".$color2 ." ".$color2.')"/>
  <circle  cx="'.($radio+$radio).'" cy="50%" r="'.$radio.'" fill="rgb('.$color2 ." ".$color1 ." ".$color3.')"/>
  <circle  cx="'.($radio+$radio+$radio+$radio).'" cy="50%" r="'.$radio.'" fill="rgb('.$color3 ." ".$color2 ." ".$color1.')"/>
  <circle  cx="'.($radio+$radio+$radio+$radio+$radio+$radio).'" cy="50%" r="'.$radio.'" fill="rgb('.$color3 ." ".$color2 ." ".$color1.')"/>

  </svg>.'
);

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
