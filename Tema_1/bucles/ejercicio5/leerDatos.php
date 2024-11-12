<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div {
        height: 120px;
        width: 120px;
        background-color: red;
        margin: 20px;
    }
</style>

<body>
    <?php
    if (isset($_GET["nCajas"])) {
        $nCajas = $_GET["nCajas"];
        if ($nCajas == "") {
            echo "Introduzca un numero valido";
            return;
        }
    }
    ?>
    <form action="sumarDatos" style="display:flex;">

        <?php

        for ($i = 0; $i < $nCajas; $i++) {
            echo "<div>hola mundo</div>";
            echo "    <input type='hidden' name='number' value='" . $i . "'>
    ";
        }
        ?>
    </form>


</body>

</html>