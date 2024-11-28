<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="parte2.php" method="post">
        <h5>Escriba un numero de 18 hasta 130</h5>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>

    <?php

    if (isset($_GET["dato"])) {
        echo $_GET["dato"];
    }
    ?>
</body>

</html>