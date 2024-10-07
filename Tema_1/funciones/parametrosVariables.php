<?php
function mayor():int{
    $num=func_get_args();

    $alto=-1234234123;
    for ($i=0; $i<count($num[0]) ; $i++) { 
        $alto=$num[0][$i]>$alto ? $num[0][$i]:$alto;
    }

    return $alto;
}
function concatenar(...$palabras): string{
    $valor="";
    for ($i=0; $i <count($palabras) ; $i++) { 
        $valor= $valor.$palabras[$i];
    }
    return $valor;
}
