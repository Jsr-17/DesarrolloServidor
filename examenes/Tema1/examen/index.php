<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>

<body>
    <?php
    $valor = $_POST["click"];
    echo (
        '
     <form action=' . $_SERVER["PHP_SELF"] . ' method="POST">
      <input type="hidden"  name="click" value="click">
     <input type="submit" >
    
     </form>
    '
    );
    if ($valor == "click") {
        header("Location: ./tablero2.php");
    }


    ?>

    <form action="PHP"></form>

</body>

</html>