<?php
/**
 * Variables. Sin formularios.(1) 3 - variables-1-03.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada de dados.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>


<?php

$dado1=rand(1,6);
$dado2=rand(1,6);

printf('  <img src="./img/%s.svg" alt="" srcset="">
',$dado1);

printf('  <img src="./img/%s.svg" alt="" srcset="">
',$dado2);
echo'<br>';
echo $dado1+$dado2;


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
