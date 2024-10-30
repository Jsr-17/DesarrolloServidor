<?php
function leeFrases($frase):string{
    $fraseNueva="";
    $arr=str_split($frase);
        for ($i=0; $i <count($arr) ; $i++) { 
            if ($i%2 !=0 ) {
               $fraseNueva.=$arr[$i];
            }
        }
        return $fraseNueva;
}