<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['contador'])) {
        $contador = (int)$_GET['contador'];
        $contador++;
        echo $contador;
    }

    ?>
    <form action="ejercicio2.php" method="get">
        <button type="submit">sumar</button>
        <input type="hidden" name="contador" value="<?= $contador ?>">
    </form>


</body>

</html>