
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina un animal.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un animal</h1>

  <p>Actualice la página para mostrar un nuevo grupo de animales.</p>

<?php

$numAleatorioRango=rand(20,30);
$arrayAnimales=[];
$numAleatorioAnimal=[];

for ($i=0; $i < $numAleatorioRango; $i++) { 
  $numAleatorioAnimal=rand(10,60);

  $arrayAnimales[$i]="&#1280".$numAleatorioAnimal.";";
}
echo"<br>";

for ($i= 0; $i < count($arrayAnimales); $i++) {  
echo $arrayAnimales[$i];
}

$animalAleatorio=$arrayAnimales[rand(0,count($arrayAnimales))];

echo "<br>";
echo "Animal aleatorio a eliminar".$animalAleatorio;
echo "<br>";


for ($i= 0; $i < count($arrayAnimales); $i++) {  
  if($arrayAnimales[$i]==$animalAleatorio) unset($arrayAnimales[$i]);
  echo$arrayAnimales[$i];


}

echo "<br>";


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
