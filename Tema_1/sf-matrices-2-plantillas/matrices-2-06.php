<?php
/**
 *  matrices-2-06.php
 *
 * @author Escribe aquí tu nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta corazones.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Cuenta corazones</h1>

  <p>Actualice la página para mostrar un nuevo grupo de corazones.</p>

<?php


$numAleatorio=rand(7,20);
$arrayEmoticonos=[];

for ($i=0; $i <$numAleatorio ; $i++) { 
  $numEmoticono=rand(47,52);
  $valor=(string)$numEmoticono;
  $arrayEmoticonos[$i]="&#1281". $valor.";";
  echo $arrayEmoticonos[$i];
}
$valores=array_count_values($arrayEmoticonos);
echo("<br>");

$e=0;

foreach($valores as $data){
  echo $arrayEmoticonos[$e];
  echo $data;
  echo("<br>");
  $e++;
}


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
