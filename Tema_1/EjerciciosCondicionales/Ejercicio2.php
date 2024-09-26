<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jugador1=rand(1,6);
        $jugador2=rand(1,6);

        $empate=false;

        if ($jugador1==$jugador2) {
            $empate=true;
        }
        
        if ($jugador1> $jugador2) {
            $ganador=1;
        }elseif ($jugador1< $jugador2) {
            $ganador=2;
        }

        if (!$empate) {

        echo "
        <p>Actualiza la pagina par mostrar una nueva tirada</p>
        
        <div>
            <div>
                <p>Jugador 1<p>
            <img src='./img/".$jugador1.".svg'>
             </img>
            </div> 
            <div>
                <p>Jugador 2<p>
            <img src='./img/".$jugador2.".svg'> </img>
            </div> 
                    <div>
            <p>Resultado<p>
            <p>Ha ganado el jugador ".$ganador."</p>
        </div> 
        </div>
        ";
        } else {
            echo "
            <p>Actualiza la pagina par mostrar una nueva tirada</p>
            
            <div>
            <div>
                <p>Jugador 1<p>
            <img src='./img/".$jugador1.".svg'>
             </img>
            </div> 
            <div>
                <p>Jugador 2<p>
            <img src='./img/".$jugador2.".svg'> </img>
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