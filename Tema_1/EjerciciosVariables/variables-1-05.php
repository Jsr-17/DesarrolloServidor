<?php
/**
 * Variables. Sin formularios.(1) 5 - variables-1-05.php
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
    Círculos de color.
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

print (
  '<svg  xmlns="http://www.w3.org/2000/svg">
  <circle  opacity="0.5" cx="120" cy="55" r="50" fill="rgb('.$color1 ." ".$color2 ." ".$color2.')"/>
  <circle opacity="0.5" cx="60" cy="55" r="50" fill="rgb('.$color2 ." ".$color1 ." ".$color3.')"/>
  <circle opacity="0.5" cx="90" cy="100" r="50" fill="rgb('.$color3 ." ".$color2 ." ".$color1.')"/>
  </svg>.
  <br>El primer circulo tiene este rgb('.$color1 ." ".$color2 ." ".$color2.')
  <br>El segundo circulo tiene este rgb('.$color2 ." ".$color1 ." ".$color3.')
  <br>El tercer circulo tiene este rgb('.$color3 ." ".$color2 ." ".$color1.')

  
');


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
