
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina un valor.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$nDados=rand(1,10);
$arrDados=[];


echo "Tirada de ".$nDados ."dados";
echo "<br>";

for ($i=0; $i<$nDados; $i++) { 

  $dado = rand(1, 6);
  $arrDados[$i] = $dado;
  echo '<img src="./img/' . $dado . '.svg" alt="">';
}
echo "<br>";

$dadoEliminar=rand(1,6);
echo "Dado a Eliminar";

echo "<br>";

echo '<img src="./img/' . $dadoEliminar . '.svg" alt="">';
for ($i=0; $i < count($arrDados); $i++) { 

  if($arrDados[$i]===$dadoEliminar){
    unset($arrDados[$i]);
  }
}
echo "<br>";


echo "Dados Restantes";

echo "<br>";


for ($i=0; $i<count( $arrDados); $i++) { 

  echo '<img src="./img/' . $arrDados[$i] . '.svg" alt="">';
  echo "<br>";
  

}

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
