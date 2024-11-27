<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
if (isset($_GET["color"])) {
    setcookie("color", $_GET["color"], time() + (60 * 60 * 24));
    $color = $_GET["color"];
} else {
    if (isset($_COOKIE["color"])) {
        $color = $_COOKIE["color"];
    } else {
        $color = "white";
    }
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

</body>

</html>