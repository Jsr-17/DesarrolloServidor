
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php


$numAleatorio=rand(1,6);
$arrayAsociativo=[1=>"uno",2=>"dos",3=>"tres",4=>"cuatro",5=>"cinco",6=>"seis",];

echo "<img src=./img/".$numAleatorio.".svg></img> <br>";

echo $arrayAsociativo[$numAleatorio];
?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
