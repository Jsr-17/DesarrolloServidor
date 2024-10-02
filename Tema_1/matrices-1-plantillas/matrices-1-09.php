<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    "Y" lógico.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>"Y" lógico</h1>

  <p>Actualice la página para mostrar dos secuencias aleatorias de bits y su conjunción lógica.</p>




  <?php
  $bits = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];
  $bits2 = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];

  echo "A  :";
  for ($i = 0; $i < count($bits); $i++) {
    echo $bits[$i];
  }
  echo "<br>";

  echo "B :";

  for ($i = 0; $i < count($bits2); $i++) {
    echo $bits2[$i];
  }
  echo "<br>";
  echo "A and B:  ";
  for ($i = 0; $i < count($bits); $i++) {
    if ($bits[$i] == 1 && $bits2[$i] == 1) {
      echo 1;

    } else {
      echo 0;
    }

  }

  ?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>

</html>