
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada de dados.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$numAleatorios=[rand(1,6),rand(1,6),rand(1,6)];

for ($i=0; $i < count($numAleatorios); $i++) { 
  echo "<img src=./img/".$numAleatorios[$i].".svg></img> <br>";
}


echo "Los valores obtenidos son ".$numAleatorios[0]." ".$numAleatorios[1]." ".+$numAleatorios[2];
?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
