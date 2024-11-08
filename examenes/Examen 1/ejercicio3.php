<?php
if (
    isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) && isset($_POST["n4"])
    && isset($_POST["n5"]) && isset($_POST["n6"]) && isset($_POST["reintegro"])
) {
    $numeros = [(int) $_POST["n1"], (int) $_POST["n2"], (int) $_POST["n3"], (int) $_POST["n4"], (int) $_POST["n5"], (int) $_POST["n6"], (int) $_POST["nAdicional"], $_POST["reintegro"]];

}

$n1 = rand(1, 49);
$n2 = rand(1, 49);
$n3 = rand(1, 49);
$n4 = rand(1, 49);
$n5 = rand(1, 49);
$n6 = rand(1, 49);


$nAdicional = rand(1, 49);
$nReintegro = rand(0, 9);
$numerosSorteo = [$n1, $n2, $n3, $n4, $n5, $n6, $nAdicional, $nReintegro];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio3.php" method="post">

        <input type="number" name="n1">
        <input type="number" name="n2">

        <input type="number" name="n3">
        <input type="number" name="n4">
        <input type="number" name="n5">
        <input type="number" name="n6">
        <select name="reintegro">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <div>

        <?php
        $acertados = [];
        echo "Numeros del usuario: ";
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i] . "  ";
        }
        ?>
        <?php
        echo "<br>Numeros del sorteo: ";
        for ($i = 0; $i < count($numerosSorteo); $i++) {
            if ($i == 7) {
                echo "Reintegro=" . $numerosSorteo[$i] . "  ";
                return;
            }
            echo $numerosSorteo[$i] . "  ";
        }

        for ($i = 0; $i < count($numeros); $i++) {
            for ($e = 0; $e < count($numeros); $e++) {
                if ($numeros[$i] == $numerosSorteo[$e]) {
                    $acertados = $numeros[$i];
                }
            }
        }
        echo "Numeros acertados: " . count($acertados);
        if ($numeros[7] == $numerosSorteo[6])
            echo "Reintegro acertado"

                ?>
        </div>
    </body>

    </html>