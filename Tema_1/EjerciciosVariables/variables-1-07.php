<?php
/**
 * Variables. Sin formularios.(1) 12 - variables-1-07.php
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
    Tres cuadrados.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p>

<?php

$color1=rand(0,255);
$color2=rand(0,255);
$color3=rand(0,255);

$cuadrado=rand(50,150);
$cuadrado2=rand(50,150);
$cuadrado3=rand(50,150);


print(
  '<svg width="750" height="500" viewBox="0 0 1000 1000"  xmlns="http://www.w3.org/2000/svg">
   <rect x="0" y="0" width="'.$cuadrado.'" height="'.$cuadrado.'" 
        fill="rgb('.$color2 ." ".$color1 ." ".$color3.')" />
   <rect x="300" y="0" width="'.$cuadrado2.'" height="'.$cuadrado2.'" 
        fill="rgb('.$color1 ." ".$color3 ." ".$color2.')" />
   <rect x="600" y="0" width="'.$cuadrado3.'" height="'.$cuadrado3.'" 
        fill="rgb('.$color3 ." ".$color2 ." ".$color1.')" />
  </svg>.'
);

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
