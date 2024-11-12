<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="potencia.php" method="get">
        <h3>Introduzca un rango de numeros que desea saber la potencia</h3>
        <input type="number" name="primero">
        <input type="number" name="segundo">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_GET["primero"]) && isset($_GET["primero"])) {
        $n1 = $_GET["primero"];
        $n2 = $_GET["segundo"];
    }

    $contador = 1;



    do {
        echo $n1 *= $n1;
        $contador++;
    } while ($contador < $n2);

    ?>
</body>

</html>