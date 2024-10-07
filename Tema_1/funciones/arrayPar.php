<?php
function esPar(int $num) : bool {
    
    if ($num%2==0) {
        return true;
    }
    return false;
    
}

function arrayAleatorio(int $tam, int
$min, int $max) : array{
     $arr=[];
     
     for ($i=0; $i < $tam; $i++) { 
        $numAleatorio=rand($min,$max);
        $arr=[...$arr,$numAleatorio];
    }
    return $arr;
}

function arrayPares(array &$array): int{
    $e=0;
    for ($i=0; $i < count($array); $i++) { 
     if ($array[$i]%2==0) {
        $e++;
     }
    }
    return $e;
}


