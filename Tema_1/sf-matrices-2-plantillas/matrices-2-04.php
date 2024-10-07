<?php
/**
 * matrices-2-04.php
 *
 * @author Escribe aquí tu nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina valores repetidos.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Elimina valores repetidos</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>

<?php

$numAleatorio=rand(5,15);
$arrayEmoticonos=[];


for ($i=0; $i < $numAleatorio; $i++) { 
$numAleatorio2=rand(2,11);
$valor=(string) $numAleatorio2;

if ($numAleatorio2<10){
  $valor= "0".$valor;
}
$arrayEmoticonos[$i]="&#101". $valor.";";
echo $arrayEmoticonos[$i];
}

echo "<br>";
$arrUnicos = array_unique($arrayEmoticonos);
foreach ($arrUnicos as $emoticono) {
  echo $emoticono;
}

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
