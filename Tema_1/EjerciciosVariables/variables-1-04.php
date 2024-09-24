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
$carta1=rand(1,6);
$carta2=rand(1,6);
$carta3=rand(1,6);


printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta1);

printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta2);

printf('  <img src="./img/c%s.svg" alt="" srcset="">
',$carta3);

echo'<br>';



?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
