<?php


function esPalindromo($palabra) {
    $palabraArr= str_split( $palabra);
    $salida=true;

for ($i=0; $i < count($palabraArr); $i++) { 
    if ($palabraArr[$i]!=$palabraArr[count($palabraArr)-($i+1)]) {
         $salida=false;
    }
}
if (!$salida) {
    return "No es palindromo";

}
return "Es palindromo";

}







