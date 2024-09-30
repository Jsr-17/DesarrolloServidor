<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Nombres de animales.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$arrayAnimales=[0=>"ballena",1=>"caballito-mar",2=>"camello",3=>"cebra",4=>"elefante",5=>"hipopotamo",6=>"jirafa",7=>"leon",
8=>"leopardo",9=>"medusa",10=>"mono",11=>"oso-blanco",12=>"oso",13=>"pajaro",
14=>"pinguino",15=>"rinoceronte",16=>"serpiente",17=>"tigre",18=>"tortuga-marina",19=>"tortuga"];

$valor=$arrayAnimales[rand(0,19)];

echo "<img src=./img/animales/".$valor.".svg></img> <br>";
echo"  ".$valor."  ";

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>

