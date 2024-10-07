<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "arrayPar.php";
    require "parametrosVariables.php";
    require "matematicas.php";

    ?>





    <?php

        $array1 = [1, 2, 3,4,5,6,7,8];    
        
        $resultado=esPar(2);
        var_dump( $resultado);

        echo "<br>";
        $resultado=arrayAleatorio(3,0,10);
        print_r($resultado);
        echo "<br>";
        $resultado=arrayPares($array1);
        echo $resultado;
        echo "<br>";
        $resultado=mayor($array1);
        echo $resultado;
        echo "<br>";
        $resultado=concatenar("holita vecino","mandarina","buenos dias amigos de youtube");
        echo $resultado;
        echo "<br>";
        $resultado=digitos(23);
        echo $resultado;
        echo "<br>";
        $resultado=digitosN(2307676,3);
        echo $resultado;
        echo "<br>";
        $resultado=digitosQuitaPorDetras($arg1=2307676,$arg2=3);
        echo $resultado;
        echo "<br>";
        $resultado=digitosQuitaPorDelante(2317676,3);
        echo $resultado;
        echo "<br>";

    ?>
</body>
</html>