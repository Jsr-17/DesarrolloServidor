<?php
/**
 * Variables. Sin formularios.(1) 4 - variables-1-04.php
 *
 * @author Escribe aquí tu nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    La carta más alta.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
$carta1=rand(1,10);
$carta2=rand(1,10);
$carta3=rand(1,10);
$cartaMayor;


printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta1);

printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta2);

printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta3);

echo'<br>';

if ($carta1>$carta2 && $carta1>$carta3 || 
$carta3==$carta1 && $carta1>$carta2  || 
$carta2==$carta1  && $carta1>$carta3 ||
$carta2==$carta1 && $carta3==$carta1
) {
  $cartaMayor=$carta1;
}
 if ($carta2>$carta1 && $carta3<$carta2
 || $carta3==$carta2 && $carta2>$carta1 
 ) {
  $cartaMayor=$carta2;

}
if ($carta3>$carta1 && $carta3>$carta2) {
  $cartaMayor=$carta3;

}

echo("La carta mas grande es ".$cartaMayor);


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
