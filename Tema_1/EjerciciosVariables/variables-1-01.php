<?php
/**
 * Variables. Sin formularios.(1) 1 - variables-1.php
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
    Línea.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Línea</h1>
  l

  <p>Actualice la página para mostrar una nueva línea.</p>

<?php
$linea =rand(10,100);

echo $linea;
printf( '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
<line x1="0" x2=" %s"  stroke="black" />

</svg>',$linea);


?>

  <footer>
    <p>EJose Antonio Roman Moreno</p>
  </footer>
</body>
</html>
