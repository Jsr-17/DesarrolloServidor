<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Partida de dados.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>


  <style>
    img {
      width: 80px;
      height: 80px;
    }
  </style>

  <?php

  $dadoEnemigo = rand(1, 6);
  $nDados = rand(2, 7);
  $tirada1 = [];
  $tirada2 = [];
  $ganador1 = 0;
  $ganador2 = 0;
  $empate = 0;

  for ($i = 0; $i < $nDados; $i++) {
    $dado = rand(1, 6);
    echo '<img src="./img/' . $dado . '.svg" alt="">';
    $tirada1[$i] = $dado;
  }

  echo "<br>";

  for ($i = 0; $i < $nDados; $i++) {

    $dado = rand(1, 6);
    echo '<img src="./img/' . $dado . '.svg" alt="">';

    $tirada2[$i] = $dado;
  }
  for ($i = 0; $i < $nDados; $i++) {
    if ($tirada1[$i] > $tirada2[$i]) {
      $ganador1 += 1;
    } elseif ($tirada1[$i] < $tirada2[$i]) {
      $ganador2 += 1;

    } else {
      $empate += 1;
    }

  }
  echo "<br>";
  echo "<br>";

  echo  "<b>Resultado</b>";
  echo  "<br>";
  echo "El jugador 1 ha ganado ".$ganador1." el segundo ". $ganador2 ." y empates " .$empate;

  ?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>

</html>