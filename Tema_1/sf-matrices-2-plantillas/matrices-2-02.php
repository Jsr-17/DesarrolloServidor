<?php
/**
 * matrices-2-02.php
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
    Tirada multilingüe.

    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
<?php

$nRandom=rand(1,6);

switch ($nRandom) {
  case 1:
    echo "
    Reload the page to make a new run:
    <img src=./img/1.svg></img> <br>
    
    you got a one
    ";
    break;
    case 2:
    echo "
    
    Last inn siden på nytt for å gjøre en ny kjøring:
    <img src=./img/2.svg></img> <br>
    
    du har to
    ";
      break;
    case 3:
    echo "
    Өөр ажиллуулахын тулд хуудсыг дахин ачаална уу:
    <img src=./img/3.svg></img> <br>
    
    чамд гурав байна";
    break;
    case 4:
    echo " Laden Sie die Seite neu, um einen weiteren Lauf durchzuführen:
    <img src=./img/4.svg></img> <br>
    
    Du hast vier";
    break;
    case 5:
    echo "
    ページをリロードして別の実行を実行します。
    <img src=./img/5.svg></img> <br>
    
    あなたは5つ持っています";
    break;
    case 6:
    echo "Перезагрузите страницу, чтобы выполнить еще один запуск:
    <img src=./img/6.svg></img> <br>
    
    у тебя есть шесть";
    break;
      
}

?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
