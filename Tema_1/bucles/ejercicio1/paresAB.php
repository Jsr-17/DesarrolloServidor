<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <form action="paresAB.php" method="get">
            <h3>Introduzca un rango de numeros que desea saber los pares</h3>
            <input type="number" name="primero">
            <input type="number" name="segundo">
            <button type="submit">Enviar</button>
        </form>

        <?php
        if (isset($_GET["primero"]) && isset($_GET["primero"])) {
            $n1 = $_GET["primero"];
            $n2 = $_GET["segundo"];
        }

        for ($i = $n1; $i < $n2; $i++) {
            if ($i % 2 == 0) {
                echo "<ul>" . $i . "</ul>";
            }
        }

        ?>
        <input type="hidden" name="primero" value="n2">
        <input type="hidden" name="segundo" value="n1">

    </ul>

</body>

</html>