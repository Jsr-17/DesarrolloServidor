<?php
function cifrado($cadena, $cantidad)
{
    $cadenaNueva = "";
    $cadenaLower = strtolower($cadena);

    $arrabc = str_split($cadenaLower);

    for ($i = 0; $i < count($arrabc); $i++) {

        $num = ord($arrabc[$i]);

        if ($num > 122) {
            continue;
        } else {
            $suma = $num + $cantidad;
            if ($suma <= 122) {
                $letra = chr($suma);

            } else {

                $numFinal = $cantidad + 96;
                $letra = chr($numFinal);
            }
            $cadenaNueva .= $letra;
        }
    }
    return $cadenaNueva;

}