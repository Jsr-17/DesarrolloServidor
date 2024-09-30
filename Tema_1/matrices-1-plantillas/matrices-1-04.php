<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Gestos de manos.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
  </hea <body>
  <h1>Gestos de manos</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

  <?php
  $arrayManos = ["&#x1F448;", "&#x1F449;", "&#x261D;", "&#x1F446;", "&#x1F595;"];
  $arrayColor = ["", "&#x1F3FB;", "&#x1F3FC;", "&#x1F3FF;", "&#x1F3FE;"];

  $random1=rand(0,4);
  $random2=rand(0,4);
  echo '<p">'.$arrayManos[$random1].$arrayColor[$random2].'</p>'
  ?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
  </body>

</html>