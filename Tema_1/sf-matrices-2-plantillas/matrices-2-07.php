<?php
/**
 *  matrices-2-07.php
 *
 * @author Escribe aquí tu nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Reparto de cartas.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Reparte cartas</h1>

<?php


$numAleatorio=rand(4,12);

$jugador1=[];
$jugador2=[];
$cartas=[];
$numAleatorio%2!=0  ? $numAleatorio++ : $numAleatorio;
$mitad=$numAleatorio/2;

for ($i=0; $i < $mitad; $i++) { 
  $cartaAleatoria=rand(1,10);
$jugador1[$i]="<img  src='./img/cartas/c".$cartaAleatoria.".svg' height=150px ></img>";
$cartas[$i]="<img src='./img/cartas/c".$cartaAleatoria.".svg' height=150px ></img>";

}
for ($i=$mitad; $i < $numAleatorio; $i++) { 
  $cartaAleatoria=rand(1,10);
$jugador2[$i]="<img src='./img/cartas/c".$cartaAleatoria.".svg' height=150px></img>";
$cartas[$i]="<img src='./img/cartas/c".$cartaAleatoria.".svg' height=150px></img>";
}
foreach ($cartas as $key ) {
    echo $key;
}

echo "<br>";
echo "cartas jugador 1";
echo "<br>";

foreach ($jugador1 as $key) {
  echo $key;
}
echo "<br>";
echo "cartas jugador 2";
echo "<br>";
foreach ($jugador2 as $key) {
  echo $key;
}
?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
