<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    El bit más común.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el
    bit más común en esa posición.</p>

  <?php

  $bits = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];
  $bits2 = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];
  $bits3 = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];

  echo "A  :";

  for ($i = 0; $i < count($bits); $i++) {
    echo  " ".$bits[$i];
  }
  echo "<br>";

  echo "B :";

  for ($i = 0; $i < count($bits2); $i++) {
    echo  " ".$bits2[$i];
  }

  echo "<br>";

  echo "C :";

  for ($i = 0; $i < count($bits3); $i++) {
    echo  " ".$bits3[$i];
  }

  echo "<br>";
  echo "D : ";

  for ($i = 0; $i < 10; $i++) {
    if ($bits[$i] == $bits2[$i] && $bits[$i] == $bits3[$i]) {
      echo " ".$bits[$i];
    }
    else if ($bits[$i] == $bits2[$i] && $bits[$i] != $bits3[$i]) {
      echo  " ".$bits[$i];
    }else if($bits[$i] == $bits3[$i] && $bits[$i] != $bits2[$i]){
      echo  " ".$bits[$i];
  }else if($bits2[$i] == $bits3[$i] && $bits2[$i] != $bits[$i]){
    echo  " ".$bits2[$i];
  }

  }

  ?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>

</html>