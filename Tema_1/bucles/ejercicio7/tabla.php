<?php
if (isset($_GET["nFilas"]) && isset($_GET["nColumnas"])) {
    $nFilas = $_GET["nFilas"];
    $nColumnas = $_GET["nColumnas"];

    if ($nColumnas == "" || $nFilas == "") {
        echo "Introduzca un numero valido";
        return;
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
<style>
    .bordes {
        border: solid 2px black;
    }
</style>

<body>


    <table class='bordes'>
        <?php
        for ($i = 0; $i < $nFilas; $i++) {
            echo "<tr >";
            for ($e = 0; $e < $nColumnas; $e++) {
                echo "<td>  .  </td>";
            }
            echo "</tr>";

        }


        ?>
    </table>


</body>

</html>