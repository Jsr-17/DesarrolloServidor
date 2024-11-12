<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="tablaMultiplicar.php">
        <input type="number" name="numero" id="">
        <button type="submit">envia</button>
    </form>


    <?php

    if (isset($_GET["numero"])) {
        $n1 = $_GET["numero"];
    }

    ?>


    <table>
        <thead>
            <tr>

                <td>a </td>
                <td>*</td>
                <td>b</td>
                <td>=</td>
                <td> a*b</td>

            </tr>
        </thead>
        <tbody>
            <?php

            for ($i = 0; $i < 11; $i++) {
                echo "
            <tr>

    <td> " . $n1 . "</td>
    <td>*</td>
    <td> " . $i . "</td>
    <td>=</td>
    <td> " . $n1 * $i . "</td>


            </tr>
            ";
            }
            ?>
        </tbody>
    </table>



    <input type="hidden" name="number" value="n1">

</body>

</html>