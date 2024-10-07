<?php
/**
 * matrices-2-05.php
 *
 * @author Escribe aquí tu nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Busca emoticono.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Busca emoticono</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>

<?php

$numAleatorio=rand(10,20);
$arrayEmoticonos=[];

for ($i=0; $i <$numAleatorio ; $i++) { 
  $numEmoticono=rand(12,80);
  $valor=(string)$numEmoticono;
  $arrayEmoticonos[$i]="&#1285". $valor.";";
  echo $arrayEmoticonos[$i];

}


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
