
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
$bits2=[];
for ($i=0; $i < count($bits); $i++) {

  echo $bits[$i];

  if($bits[$i]==0){
    $bits2[$i]=1;
  }else{
    $bits2[$i]= 0;
  }
}
echo "<br>";
for ($i=0; $i < count($bits2); $i++) { 
  echo $bits2[$i];
}


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
