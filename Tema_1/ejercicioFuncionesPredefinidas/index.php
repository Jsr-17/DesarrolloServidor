<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    require "frasesImpares.php";
    require "vocales.php";
    require "analizar.php";
    require "analizadorWC.php";
    require "palindromo.php";
    require "matematicas.php";
    require "codificador.php";
    ?>


    <br>
    <?php

    echo leeFrases("123456789");

    echo "
<br>
<br>
";
    cuentaVocales("hola");

    analiza("hola buenas a todos");

    analizaWC("El Noel es un compa de clase");
    echo "<br>";
    echo "-----------------------------------------------";
    echo "<br>";
    echo esPalindromo("otto otto otto ");
    echo "<br>";

    echo digitos2(100);
    echo "<br>";

    echo digitos(100);
    echo "<br>";
    echo cifrado("ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZzzzzzzzzzzzzZZZZZZ", 2);




    ?>



</body>

</html>