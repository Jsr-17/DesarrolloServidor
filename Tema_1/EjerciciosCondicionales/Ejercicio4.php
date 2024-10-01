<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $tirada=[rand(1,6),rand(1,6),rand(1,6)];
    

    if ($tirada[0]==$tirada[1] && $tirada[0]==$tirada[2] && $tirada[1]==$tirada[2] ) {
        $resultado="Empate triple";
    }elseif($tirada[0]==$tirada[1]||$tirada[0]==$tirada[2]||$tirada[1]==$tirada[2]){
        $resultado="Empate doble";
    }else {
        $valor=0;
        for ($i=0; $i < count($tirada); $i++) { 
            $valor<$tirada[$i]?$valor=$tirada[$i]:$valor;
        }
        $resultado="El valor mas alto es ".$valor;
    }

    echo   " <p>Actualiza la pagina par mostrar una nueva tirada</p>
                
    <div>
        <div>
            <p>Jugador 1<p>
        <img src='./img/" . $tirada[0] . ".svg'>
        <img src='./img/" . $tirada[1] . ".svg'>
        <img src='./img/" . $tirada[2] . ".svg'>
        </img>
        </div> 
    <div>
        <p>Resultado: ".$resultado."<p>
    </div> 
    </div>
    ";


?>
</body>
</html>