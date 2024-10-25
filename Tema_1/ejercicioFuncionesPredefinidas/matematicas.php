<?php

function digitos2(int $num)
{
    $numSt = (string) $num;

    $arrnumS = str_split($numSt);
    return count($arrnumS);
}

function digitos(int $num)
{
    $contador = 0;

    while ($num != 0) {

        $num = (int) ($num / 10);
        $contador++;
    }

    return $contador;
}

