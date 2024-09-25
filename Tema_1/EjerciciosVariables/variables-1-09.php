<?php

/**
 * Variables. Sin formularios.(1) 14 - variables-1-09.php
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
    Avance de ficha.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>


  <?php

  $dado = rand(1, 6);
  $position=0;

  switch ($dado) {
    case 1:
      $position = 340;
      break;
    case 2:
      $position = 420;
      break;

    case 3:
      $position = 550;

      break;
    case 4:
      $position = 670;

      break;
    case 5:
      $position = 780;
      break;
    case 6:
      $position = 900;

      break;


    default:
      # code...
      break;
  }

  print('

      <img src="./img/' . $dado . '.svg" width="100px" alt="" srcset="">
<svg width="750" height="500" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">

    <image href="./img/tablero.svg" width="1000" x="250" y="250" />
    
    <circle cx="' . $position . '" cy="700" r="50" fill="red"/>
</svg>



');

  ?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>

</html>