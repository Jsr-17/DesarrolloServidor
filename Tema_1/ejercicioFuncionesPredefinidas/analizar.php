<?php
function analiza($frase)
{
    $valores = [0, 0, 0, 0, 0, 0];

    $arr = str_split(strtolower($frase));
    foreach ($arr as $value) {
        switch ($value) {
            case "a":
                $valores[0] += 1;
                $valores[5] += 1;

                break;
            case "e":
                $valores[1] += 1;
                $valores[5] += 1;

                break;
            case "i":
                $valores[2] += 1;
                $valores[5] += 1;

                break;
            case "o":
                $valores[3] += 1;
                $valores[5] += 1;

                break;
            case "u":
                $valores[4] += 1;
                $valores[5] += 1;

        }
    }


    echo
    "
    Aparecen una cantidad de a:".$valores[0]."<br>
    Aparecen una cantidad de e:".$valores[1]."<br>
    Aparecen una cantidad de i:".$valores[2]."<br>
    Aparecen una cantidad de o:".$valores[3]."<br>
    Aparecen una cantidad de u:".$valores[4]."<br>
    Aparecen una cantidad de letras de :".$valores[5]."
    <br>";
    for ($i=0; $i < $valores[5]; $i++) { 
        echo"-";
    }
}