<?php

if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["eleccion"])) {

    $n2 = $_GET["n2"];
    $n1 = $_GET["n1"];
    $eleccion = $_GET["eleccion"];
    $resultado = 0;


    switch ($eleccion) {
        case 'suma':
            echo $resultado = $n1 + $n2;
            break;
        case 'restar':
            echo  $resultado = $n1 - $n2;
            break;
        case 'multiplicar':
            echo  $resultado = $n1 * $n2;
            break;
        case 'dividir':
            if ($n2 == 0) {
                echo "no se puede dividir entre 0";
                echo '<form action="ejercicio3.php" method="get">
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="submit" value="enviar">
        <select name="eleccion" id="">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="dividir">dividir</option>
        </select>
    </form>';

                return;
            }
            echo  $resultado = $n1 / $n2;
            break;
        default:
            # code...
            break;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio3.php" method="get">
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="submit" value="enviar">
        <select name="eleccion" id="">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="dividir">dividir</option>
        </select>
    </form>

</body>

</html>