<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Hombres y mujeres haciendo deporte.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Hombres y mujeres haciendo deporte</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
$arrayHombre=["&#x1F3C7;","&#x1F3C2;","&#x1F3CA;","&#x1F93C;"];
$valor=rand(0,3);


print "  <p > ".$arrayHombre[$valor]."</p>\n";

$arrayHombre[$valor][0]= ";&";
print "  <p > ". $arrayHombre[$valor] ."</p>\n";


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>

