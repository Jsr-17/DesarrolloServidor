<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
session_start();
if (isset($_GET["color"])) {
    $color = $_GET["color"];
    $_SESSION["color"] = $color;
}
?>

<body style="background-color: <?php echo $color ?>;">

    <form action="fondo.php" method="get">
        <select name="color" id="">
            <option value="red">rojo</option>
            <option value="yellow">amarillo</option>
            <option value="blue">azul</option>
            <option value="grey">gris</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <a href="fondo2.php">ir a pag 2</a>

</body>

</html>