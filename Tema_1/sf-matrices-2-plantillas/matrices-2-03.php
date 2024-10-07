<?php
/**
 * matrices-2-03.php
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
    Diccionario multilingüe.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
<?php

$numAleatorio=rand(0,2);
$numAleatorio2=rand(0,2);

$arrayIdiomas=["English","한국인","Deutsch"];
$arrayInterfaz=[
$arrayIdiomas[0]=>["means shoes in spanish"," means Computer in spanish","means Horse in spanish"," means Internet in spanish "]
,
$arrayIdiomas[1]=>["스페인어로 신발이라는 뜻", "스페인어로 컴퓨터를 뜻해요", "스페인어로 말이라는 뜻", "스페인어로 인터넷이라는 뜻"]
,
$arrayIdiomas[2]=>[" bedeutet Schuh auf Spanisch", " bedeutet Computer auf Spanisch", " bedeutet Pferd auf Spanisch", " bedeutet Internet auf Spanisch"]
];

$arrayPalabras=["Zapato","Ordenador","Caballo","Internet"];

$palabra=$arrayPalabras[$numAleatorio];
$idioma=$arrayIdiomas[$numAleatorio2];
$interfaz=$arrayInterfaz[$idioma][$numAleatorio];


echo $palabra ." ".$interfaz


?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
