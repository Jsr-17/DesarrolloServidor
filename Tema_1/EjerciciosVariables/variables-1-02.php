<?php
/**
 * Variables. Sin formularios.(1) 2 - variables-02.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo de color.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>

  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php

$color1=rand(0,255);
$color2=rand(0,255);
$color3=rand(0,255);

printf( ' 
<svg  xmlns="http://www.w3.org/2000/svg">
  <circle cx="50" cy="50" r="50" fill="rgb(%s %s %d)"/>
</svg>
',$color1,$color2,$color3);

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
