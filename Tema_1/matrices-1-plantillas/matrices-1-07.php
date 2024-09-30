
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Negación.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

<?php
$bits=[rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1)];

for ($i=0; $i < count($bits); $i++) { 
  echo $bits[$i];
}


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
