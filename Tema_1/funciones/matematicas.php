<?php
function digitos(int $num): int{

    $valorString=(string) $num;
    

    return  strlen($valorString);
}

function digitosN(int $num,int $pos):int{

    $valorString=(string) $num;

    $total=(int)$valorString[$pos];

    return $total;
}
function digitosQuitaPorDetras(int $num,int $cant):int{

    $valorString=(string)$num;
    $valor=substr($valorString,-$cant);

    $total=(int)$valor;
    
    return $total;
    
}
function digitosQuitaPorDelante(int $num,int $cant):int{

    $valorString=(string)$num;
    $valor=substr($valorString,$cant);

    $total=(int)$valor;
    
    return $total;
    
}