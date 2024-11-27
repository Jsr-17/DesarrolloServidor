<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
session_start();
if (isset($_SESSION["color"])) {
    $color = $_SESSION["color"];
}
?>

<body style="background-color: <?php echo $color ?>;">

    <a href="fondo2.php">ir a pag 2</a>
    <a href="vacia.php">Quitar color de fondo</a>


</body>

</html>