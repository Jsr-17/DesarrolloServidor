<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $jugador1 = [rand(1, 6), rand(1, 6), rand(1, 6)];
    $jugador2 = [rand(1, 6), rand(1, 6), rand(1, 6)];

    
    if( $jugador1[0]==$jugador1[1] && $jugador1[1]==$jugador1[2] && 
        $jugador2[0]==$jugador2[1] && $jugador2[1]==$jugador2[2]
        &&$jugador1[0]==$jugador2[0] ){
            $empate=true;
        }else {
            $empate=false;
            if ($jugador1[0] == $jugador2[0] && $jugador1[1] == $jugador2[1] && $jugador1[2] == $jugador2[2]) {
                $empate = true;
            } else {
                $sumaJugador1 = $jugador1[0] + $jugador1[1] + $jugador1[2];
                $sumaJugador2 = $jugador2[0] + $jugador2[1] + $jugador2[2];
                
                if ($jugador1[0] == $jugador1[1] && $jugador1[1] == $jugador1[2] && 
                    $jugador2[0] == $jugador2[1] && $jugador2[1] == $jugador2[2]) {
                    if ($sumaJugador1 > $sumaJugador2) {
                        $ganador = 1;
                    } elseif ($sumaJugador2 > $sumaJugador1) {
                        $ganador = 2;
                    }
                } elseif ($jugador1[0] == $jugador1[1] && $jugador1[1] == $jugador1[2]) {
                    $ganador = 1;
                } elseif ($jugador2[0] == $jugador2[1] && $jugador2[1] == $jugador2[2]) {
                    $ganador = 2;
                } else {
                    if (($jugador1[0] == $jugador1[1] || $jugador1[1] == $jugador1[2] || $jugador1[0] == $jugador1[2]) &&
                        ($jugador2[0] == $jugador2[1] || $jugador2[1] == $jugador2[2] || $jugador2[0] == $jugador2[2])) {
                        if ($sumaJugador1 > $sumaJugador2) {
                            $ganador = 1;
                        } else {
                            $ganador = 2;
                        }
                    } elseif ($jugador1[0] == $jugador1[1] || $jugador1[1] == $jugador1[2] || $jugador1[0] == $jugador1[2]) {
                        $ganador = 1;
                    } elseif ($jugador2[0] == $jugador2[1] || $jugador2[1] == $jugador2[2] || $jugador2[0] == $jugador2[2]) {
                        $ganador = 2;
                    } else {
                        $ganador = ($sumaJugador1 > $sumaJugador2) ? 1 : 2;
                    }
                }
            }
            

        }


    if (!$empate) {

        echo "
                <p>Actualiza la pagina par mostrar una nueva tirada</p>
                
    <div>
        <div>
            <p>Jugador 1<p>
        <img src='./img/" . $jugador1[0] . ".svg'>
        <img src='./img/" . $jugador1[1] . ".svg'>
        <img src='./img/" . $jugador1[2] . ".svg'>

        Total ".$jugador1[0]+ $jugador1[1]+ $jugador1[2]."
         </img>
        </div> 
        <div>
            <p>Jugador 2<p>
        <img src='./img/" . $jugador2[0] . ".svg'> </img>
        <img src='./img/" . $jugador2[1] . ".svg'> </img>
        <img src='./img/" . $jugador2[2] . ".svg'> </img>
        <p>
        Total ".$jugador2[0]+ $jugador2[1]+ $jugador2[2]."
        </p>
        </div> 
                            <div>
                    <p>Resultado<p>
                    <p>Ha ganado el jugador " . $ganador . "</p>
                </div> 
                </div>
                ";
    } else {
        $ganador="Empate";
        echo "
                    <p>Actualiza la pagina par mostrar una nueva tirada</p>
                    
    <div>
        <div>
            <p>Jugador 1<p>
        <img src='./img/" . $jugador1[0] . ".svg'>
        <img src='./img/" . $jugador1[1] . ".svg'>
        <img src='./img/" . $jugador1[2] . ".svg'>

        Total ".$jugador1[0]+ $jugador1[1]+ $jugador1[2]."
         </img>
        </div> 
        <div>
            <p>Jugador 2<p>
        <img src='./img/" . $jugador2[0] . ".svg'> </img>
        <img src='./img/" . $jugador2[1] . ".svg'> </img>
        <img src='./img/" . $jugador2[2] . ".svg'> </img>
        <p>
        Total ".$jugador2[0]+ $jugador2[1]+ $jugador2[2]."
        </p>
        </div> 
                            <div>
                        <p>Resultado<p>
                        <p>Han empatado</p>
                    </div> 
                    </div>
                    ";
    }


    ?>
</body>
</html>